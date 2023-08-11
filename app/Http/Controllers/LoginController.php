<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {

        if (\request()->ajax()) {

            $credentials = $request->validate([
                'email' => 'required',
                'password'  => 'required'
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return response()->json([
                    'success'   => true,
                    'message'   => 'Anda berhasil login',
                ], 200);
            }

            return response()->json([
                'success'   => false,
                'message'   => 'Email Atau Password Salah!',
            ], 401);
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json([
            'success'   => true,
            'message'   => 'Anda berhasil logout'
        ], 200);
    }
}
