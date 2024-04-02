<?php


namespace App\Http\Controllers\Siswa;


use App\Models\CalonSiswa;

class ProfilController
{
    public function index()
    {
        $profil = CalonSiswa::with(['user'])
            ->where('user_id', '=', auth()->id())
            ->firstOrFail();

        return view('siswa.calonsiswa.detail_calonsiswa')->with([
            'profil' => $profil
        ]);
    }
}
