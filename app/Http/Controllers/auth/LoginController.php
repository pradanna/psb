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
//            $user = User::where('username', $field['username'])->first();
//            if ($user && Hash::check($field['password'], $user->password)){
//                return redirect('/admin');
//            }
        if ($this->isAuth($field)) {
            $role     = \auth()->user()->role;
            $redirect = "/$role";

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
