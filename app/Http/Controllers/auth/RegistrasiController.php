<?php

namespace App\Http\Controllers\auth;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\CalonSiswa;
use App\Models\TahunAjaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrasiController extends CustomController
{
    public function index()
    {
        if (request()->method() == 'POST') {
            return $this->registration();
        }

        return view('auth.daftar');
    }

    public function registration()
    {
        $siswa = request()->validate([
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            'asal_sekolah'  => 'required',
            'no_hp'         => 'required',
            'url_foto'      => 'required',
            'url_ijazah'    => 'required',
        ]);

        $user = request()->validate([
            'nama'     => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
        ]);

        $user['password'] = Hash::make($user['password']);
        $user['role']     = 'siswa';

        $dir = Str::slug(strtolower($user['nama']).' '.strtolower($siswa['asal_sekolah']), '-');
        DB::beginTransaction();
        try {
            if (request('url_foto')) {
                $image     = $this->generateImageName('url_foto');
                $stringImg = '/images/calon-siswa/'.$dir.'/'.$image;
                $this->uploadImage('url_foto', $dir.'/'.$image, 'siswaImage');
                $siswa['url_foto'] = $stringImg;
            }

            if (request('url_ijazah')) {
                $image     = $this->generateImageName('url_ijazah');
                $stringImg = '/images/calon-siswa/'.$dir.'/'.$image;
                $this->uploadImage('url_ijazah', $dir.'/'.$image, 'siswaImage');
                $siswa['url_ijazah'] = $stringImg;
            }
            $tahun = TahunAjaran::limit(1)->latest('nama')->get();

            $user                     = User::create($user);
            $siswa['user_id']         = $user->id;
            $siswa['tahun_ajaran_id'] = $tahun[0]->id;
            $siswa['tanggal_lahir']   = Carbon::make($siswa['tanggal_lahir']);
            CalonSiswa::create($siswa);
            DB::commit();

            return redirect()->back()->with(['message' => 'berhasil']);

        } catch (\Exception $err) {
            DB::rollBack();

            return redirect()->back()->withInput(request()->input())->withErrors(['error' => $err->getMessage()]);
        }

    }
}
