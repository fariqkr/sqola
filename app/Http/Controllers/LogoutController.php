<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout() {
        auth('student')->logout();

        return redirect()->route('landing');
    }
}
