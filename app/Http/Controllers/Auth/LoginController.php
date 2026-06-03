<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Halaman Login
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Proses Login
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            // Admin
            if (auth()->user()->role_id == 1) {
                return redirect()->route('admin.dashboard');
            }

            // RT
            if (auth()->user()->role_id == 2) {
                return redirect()->route('rt.dashboard');
            }

            // Warga
            if (auth()->user()->role_id == 3) {
                return redirect()->route('warga.dashboard');
            }

            Auth::logout();

            return redirect()
                ->route('login')
                ->with('error', 'Role tidak ditemukan.');
        }

        return back()
            ->withErrors([
                'email' => 'Email atau Password salah'
            ])
            ->withInput();
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}