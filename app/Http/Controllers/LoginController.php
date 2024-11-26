<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm() {
        return view('pages/login_page');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            return back()->withErrors([
                'email' => 'No user found with this email address.',
            ]);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home.index');
        }
    
        return back()->withErrors([
            'password' => 'The provided password is incorrect.',
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home.index');
    }

    
}
