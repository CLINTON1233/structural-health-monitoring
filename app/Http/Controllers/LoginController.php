<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Show the login form
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Handle login attempt - MODIFIED FOR DEVELOPMENT
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Untuk development saja - langsung login dengan user pertama atau buat user dummy
        $user = User::first();

        // Jika tidak ada user, buat user dummy
        if (!$user) {
            $user = User::create([
                'name' => 'Demo User',
                'email' => 'demo@shm.com',
                'password' => bcrypt('password123'),
            ]);
        }

        // Login user
        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');

        // KODE ASLI (dikomentari untuk sementara):
        /*
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        */
    }

    /**
     * Handle logout
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
