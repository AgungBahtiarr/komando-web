<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' =>'required',
        ], [
                'login.required'=>'NRP atau NIP wajib diisi',
                'password.required'=>'Password wajib diisi',
            ]);
        $login_type =preg_match('/^\d+$/', $request->input('login'))
        ? 'nrp'
        : 'nip';

        $request->merge([$login_type => $request->input('login')]);

        if (Auth::attempt($request->only($login_type, 'password'))) {
            return redirect()->intended('dashboard');
        } else {
            //dd($request->all());
            return back()->withInput()->withErrors(['login' => 'Kredensial Login Invalid.']);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
