<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        return view('login.login');
    }

    public function loginauth(Request $request)
    {
        if (Auth::attempt(['nip_nisn' => $request->nip_nisn, 'password' => $request->password])) {
            if (Auth::user()->role_id === 'superadmin') {
                return redirect('superadmin-beranda');
            }
        }
        if (Auth::attempt(['nip_nisn' => $request->nip_nisn, 'password' => $request->password])) {
            if (Auth::user()->role_id === 'admin') {
                return redirect('admin-beranda');
            }
        }
        if (Auth::attempt(['nip_nisn' => $request->nip_nisn, 'password' => $request->password])) {
            if (Auth::user()->role_id === 'nasabah') {
                return redirect('nasabah-beranda');
            }
        }
        return back()->with('error', 'NIP/NISN atau Password salah!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}