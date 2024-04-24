<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapitulasiController extends Controller
{
    public function index()
    {
        $tahunajarans = TahunAjaran::get();
        return view('admin.rekapitulasi.rekapitulasinilai', ['tahunajarans' => $tahunajarans]);
    }

    public function siswaByTahunAjaran(Request $request)
    {
        // Ambil tah un ajaran dari request
        $tahunAjaran = $request->input('tahun_ajaran');

        // Jika tidak ada tahun ajaran yang diberikan, kembalikan kesalahan
        if (!$tahunAjaran) {
            return response()->json(['error' => 'Parameter tahun_ajaran diperlukan'], 400);
        }

        $calonSiswa = CalonSiswa::with(['user.registrans' => function ($query) {
            $query->withCount([
                'jawabans as scored' => function ($query) {
                    $query->select(DB::raw('SUM(case when score = 1 then 1 else 0 end)'));
                }
            ]);
        }])->where('tahun_ajaran_id', $tahunAjaran)->orderBy('tempat_lahir', 'desc')->get();

        // Sort the collection by the scored attribute
        // $sortedCalonSiswa = $calonSiswa->sortByDesc(function ($siswa) {
        //     if ($siswa->user->registrans->scored !== null) {
        //         return $siswa->user->registrans->scored;
        //     }
        //     return $siswa->user->nama;
        // });

        return response()->json($calonSiswa->values()->all(), 200);
        // Kembalikan data dalam bentuk response JSON
    }

    public function rekapitulasi(Request $request)
    {
        // Ambil tah un ajaran dari request
        $tahunAjaran = $request->input('tahun_ajaran');
        $tahunajarandipilih = TahunAjaran::find($tahunAjaran);
        $jumlahsiswaditerima = $tahunajarandipilih->jumlah_siswa;

        // Jika tidak ada tahun ajaran yang diberikan, kembalikan kesalahan
        if (!$tahunAjaran) {
            return response()->json(['error' => 'Parameter tahun_ajaran diperlukan'], 400);
        }

        $calonSiswa = CalonSiswa::with(['user.registrans' => function ($query) {
            $query->withCount([
                'jawabans as scored' => function ($query) {
                    $query->select(DB::raw('SUM(case when score = 1 then 1 else 0 end)'));
                }
            ]);
        }])->where('tahun_ajaran_id', $tahunAjaran)->get();

        $siswasSorted = $calonSiswa->sortByDesc('user.registrans.scored');

        // Ambil dua siswa teratas
        $topTwoSiswa = $siswasSorted->take($jumlahsiswaditerima);

        // Tandai siswa yang lolos dan tidak lolos (jika perlu)
        foreach ($calonSiswa as $siswa) {
            if ($topTwoSiswa->contains($siswa)) {
                $siswa->status_penerimaan = "diterima";
            } else {
                $siswa->status_penerimaan = "ditolak";
            }
        }

        // Simpan perubahan ke database (jika diperlukan)
        foreach ($calonSiswa as $siswa) {
            $siswa->save();
        }

        return response()->json(['message' => 'Dua siswa terbaik berhasil dipilih'], 200);
    }
}
