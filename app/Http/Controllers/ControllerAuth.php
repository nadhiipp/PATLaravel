<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Guru;
use App\Models\Murid;

class ControllerAuth extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function sumbitLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);

            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            } elseif ($user->role === 'guru') {
                return redirect()->route('guru.index');
            } else {
                return redirect()->route('murid.index');
            }
        }

        return back()->withErrors(['login' => 'Username atau password salah']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,guru,murid'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        if ($request->role == 'guru') {
            $guru = Guru::where('nip', $request->username)->first();
            if (!$guru) return back()->withErrors(['username' => 'NIP tidak ditemukan']);
            $user->guru_id = $guru->id;
        } elseif ($request->role == 'murid') {
            $murid = Murid::where('nis', $request->username)->first();
            if (!$murid) return back()->withErrors(['username' => 'NIS tidak ditemukan']);
            $user->murid_id = $murid->id;
        }

        $user->save();

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat');
    }
}