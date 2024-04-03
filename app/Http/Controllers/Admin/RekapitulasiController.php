<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

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
        $calonSiswa = CalonSiswa::with(['user', 'tahun_ajaran'])->where('tahun_ajaran_id', $tahunAjaran)->get();

        // Kembalikan data dalam bentuk response JSON
        return response()->json($calonSiswa, 200);
    }
}
