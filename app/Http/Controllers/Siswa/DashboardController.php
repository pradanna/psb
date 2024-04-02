<?php


namespace App\Http\Controllers\Siswa;


use App\Models\Informasi;

class DashboardController
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('siswa.dashboard')->with([
            'informasi' => $informasi
        ]);
    }
}
