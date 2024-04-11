<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function index()
    {
        if (request()->method() == 'POST') {
            return $this->postLogin();
        }

        return view('auth.login');
    }

    public function postLogin()
    {
        $field = \request()->validate(
            [
                'username' => 'required|string|exists:users,username',
                'password' => 'required|string',
            ]
        );


        if ($this->isAuth($field)) {
            $user = \auth()->user();
            $role     = \auth()->user()->role;

            $users = \App\Models\User::with('calon_siswa')->find($user->id);

            if ($role == 'siswa') {
                $statusPenerimaan = $users->calon_siswa->status_pendaftaran ?? null;
                if ($statusPenerimaan !== 'diterima') {
                    return redirect()->back()->withErrors(['password' => 'Anda belum diterima, silahkan menunggu paling lama 1x24 jam, dan coba login kembali'])->withInput();
                }
                // Jika siswa sudah diterima, tentukan redirect tujuan
                $redirect = "/siswa";
            } else {
                $redirect = "/admin";
            }

            //            return response()->json();

            return redirect($redirect);
        }

        return redirect()->back()->withErrors(['password' => 'Password mismach.'])->withInput();
    }

    /**
     * @param $credentials
     *
     * @return bool
     */
    public function isAuth($credentials = [])
    {
        if (count($credentials) > 0 && Auth::attempt($credentials)) {
            return true;
        }

        return false;
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
