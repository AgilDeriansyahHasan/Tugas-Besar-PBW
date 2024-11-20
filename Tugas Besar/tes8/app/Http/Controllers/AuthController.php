<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Data pengguna statis
    private $users = [
        [
            'username' => 'admin',
            'password' => 'admin123', // Harus di-hash jika menggunakan Hash::check
            'role' => 'admin',
        ],
        [
            'username' => 'user',
            'password' => 'user123', // Harus di-hash jika menggunakan Hash::check
            'role' => 'user',
        ],
    ];

    public function index()
    {
        return view('auth.login_admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required|in:admin,user',
        ]);

        // Cari pengguna di array statis
        $user = collect($this->users)->first(function ($u) use ($request) {
            return $u['username'] === $request->username && $u['role'] === $request->role;
        });

        // Verifikasi password
        if ($user && $request->password === $user['password']) { // Sesuaikan logika ini jika password di-hash
            // Simpan sesi pengguna
            session(['role' => $user['role'], 'username' => $user['username']]);

            // Redirect berdasarkan role
            if ($user['role'] === 'admin') {
                return redirect()->route('auth.dashboard'); // Route untuk admin
            } elseif ($user['role'] === 'user') {
                return redirect()->route('user.dashboard'); // Route untuk user
            }
        }

        // Jika gagal login
        return redirect()->back()->withErrors(['login' => 'Username atau password salah.']);
    }

    public function dashboard()
    {
        if (!session('username')) {
            return redirect()->route('auth.index');
        }

        return view('admin.dashboard', ['username' => session('username')]);
    }
}
