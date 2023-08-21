<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class UserController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    public function login()
    {
        return view('users.login');
    }
    public function handleRegistration(User $user, createUserRequest $request)
    {
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('accueil')->with('success', 'Votre compte a été crée.');
    }
    public function handleLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        } else {
            return redirect()->back()->with('error', 'Votre compte n\'a pas été trouvé');
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}