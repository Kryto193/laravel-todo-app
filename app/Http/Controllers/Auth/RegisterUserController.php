<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function open()
    {
        return view('userauth.Register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username'=>['required','string','max:255'],
            'email'=>['required','string','unique:users'],
            'password'=>['required','string',Password::default()],
        ]);

        $user= User::create([
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
