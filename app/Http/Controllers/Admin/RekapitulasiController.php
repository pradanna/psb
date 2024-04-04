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
        // Ambil tahun ajaran dari request
        $tahunAjaran = $request->input('tahun_ajaran');

        // Jika tidak ada tahun ajaran yang diberikan, kembalikan kesalahan
        if (!$tahunAjaran) {
            return response()->json(['error' => 'Parameter tahun_ajaran diperlukan'], 400);
        }

        // Cari calon siswa berdasarkan tahun ajaran
        // $calonSiswa = CalonSiswa::with(['user', 'tahun_ajaran'])->leftJoin('jawabans', 'siswa.id', '=', 'jawaban.siswa_id')
        //     ->select('siswa.*')
        //     ->selectRaw('COUNT(CASE WHEN jawaban.benar = 1 THEN 1 END) AS scores')
        //     ->where('tahun_ajaran_id', $tahunAjaran)
        //     ->groupBy('siswa.id')->get();

        $calonSiswa = CalonSiswa::leftJoin('registrants', 'calon_siswas.id', '=', 'registrants.user_id')
            ->leftJoin('jawabans', 'registrants.id', '=', 'jawabans.registrant_id')
            ->select(
                'calon_siswas.*',
                DB::raw('COUNT(CASE WHEN jawabans.score = 1 THEN 1 END) AS scored')
            )->where('tahun_ajaran_id', $tahunAjaran)
            ->groupBy('calon_siswas.id')
            ->get();

        dd($calonSiswa);

        // Kembalikan data dalam bentuk response JSON
        return response()->json($calonSiswa, 200);
    }
}
