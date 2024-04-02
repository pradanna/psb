<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\CalonSiswa;

class dashboardController extends CustomController
{
    public function index()
    {

        $totalsiswa = CalonSiswa::count();

        $totalsiswaditerima = CalonSiswa::where('status_pendaftaran', 'diterima')
            ->count();

        $totalsiswalaki = CalonSiswa::where('status_pendaftaran', 'diterima')
            ->where('jenis_kelamin', "Laki - laki")
            ->count();

        $totalsiswaperempuan = CalonSiswa::where('status_pendaftaran', 'diterima')
            ->where('jenis_kelamin', "Perempuan")
            ->count();

        return view('admin.dashboard', ['totalsiswa' => $totalsiswa, 'totalsiswaditerima' => $totalsiswaditerima, 'totalsiswalaki' => $totalsiswalaki, 'totalsiswaperempuan' => $totalsiswaperempuan]);
    }
}
