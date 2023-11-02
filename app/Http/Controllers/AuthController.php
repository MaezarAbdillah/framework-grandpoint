<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerAction(Request $request) {
        // Periksa apakah password dan konfirmasi password cocok
        if ($request->password !== $request->confirm_password) {
            session()->flash('error', 'Konfirmasi password Anda salah!');
            return redirect('/auth/signUp');
        }

        // Periksa apakah username sudah digunakan
        $usernameExist = User::where('email', $request->email)->first();
        if ($usernameExist) {
            session()->flash('error', 'Username sudah digunakan!');
            return redirect('/auth/signUp');
        }

        // Buat akun pengguna baru
        User::create([
            'role' => $request->role,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('success', 'Akun berhasil dibuat!');
        return redirect('/auth/signUp');
    }

    public function loginAction(Request $request) {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $user = Auth::User();

            if ($user->role == 'admin') {
                return redirect('/admin/dashboard');
            } elseif ($user->role == 'user') {
                return redirect('/');
            }
        } else {
            session()->flash('error', 'Username atau Password anda salah!');
            return redirect('/auth/signIn');
        }
    }



}
