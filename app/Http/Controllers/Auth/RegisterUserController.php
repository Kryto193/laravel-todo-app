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
            'name'=>['required','string','max:255'],
            'email'=>['required','string'],
            'password'=>['required','string',Password::default()],
        ]);

        $user= User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'passowrd'=> Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
