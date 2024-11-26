<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    public function showLoginForm() {
        return view('pages/login_page');
    }
}
