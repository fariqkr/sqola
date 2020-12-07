<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function indexTeacher() {
        return view('teacher.register');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'nickname' => 'required|max:255',
            'email' => 'required|email|unique:students|max:255',
            'password' => 'required|confirmed',
        ]);
    }
}

