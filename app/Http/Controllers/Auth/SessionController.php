<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SessionController extends Controller
{
    public function open()
    {
        return view("userauth.Login");
    }
    public function store(Request $request)
    {
    $validated= request()->validate([
        'email'=>['required','string'],
        'password'=>['required','string',Password::default()],
        ]);

        if(Auth::attempt($validated)){
            $request ->session()->regenerate();
            return redirect('/')->with('success','Logged in Successfully');
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
