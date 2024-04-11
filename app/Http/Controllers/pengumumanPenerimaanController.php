<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengumumanPenerimaanController extends Controller
{
    public function index()
    {
        $tahunajarans = TahunAjaran::get();
        return view('pengumuman', ['tahunajarans' => $tahunajarans]);
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
        }])->where('tahun_ajaran_id', $tahunAjaran)->get();

        // Sort the collection by the scored attribute
        $sortedCalonSiswa = $calonSiswa->sortByDesc(function ($siswa) {
            return $siswa->user->nama;
        });

        return response()->json($sortedCalonSiswa->values()->all(), 200);
    }
}
