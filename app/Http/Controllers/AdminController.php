<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('logAdmin');
    }

    public function validateAdminCredentials(Request $request, Admin $admin) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)) {
           $token = $request->session();
            Session::put('username', $credentials['username']);
            Session::put('password', $credentials['password']);
            return view('adminIndex');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function index() {
        return view('adminIndex');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('index.index'));
    }
}
