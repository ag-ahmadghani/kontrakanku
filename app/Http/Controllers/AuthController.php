<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'in:admin,user',
        ]);

        $add = User::create([
            'name' => $request->nama_depan . ' ' . $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'user', // Default role user
        ]);

        if ($add) {
            return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
        } else {
            return back()->withErrors([
                '' => 'Registrasi gagal',
            ]);
        }
    }

    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Periksa role pengguna dan arahkan ke halaman yang sesuai
            if (Auth::user()->role === 'admin') {
                return redirect('/admin/'); // Redirect ke halaman admin
            }

            return redirect('/'); // Redirect ke halaman home untuk user biasa
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect ke halaman home
    }
}
