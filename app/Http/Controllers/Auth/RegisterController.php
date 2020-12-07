<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'required|max:255',
            'nickname' => 'required|max:255',
            'email' => 'required|email|unique:students|max:255',
            'password' => 'required|confirmed',
        ]);

        Student::create([
            'fullname' => $request->name,
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth('student')->attempt($request->only('email', 'password'));

        return redirect()->route('landing');
    }
}

