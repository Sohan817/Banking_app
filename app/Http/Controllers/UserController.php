<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup_view()
    {
        return view('auth.signup');
    }
    //register code
    public function signup(Request $req)
    {
        //Save data
        User::create([
            'name' => $req->name,
            'account_type' => $req->account_type,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        // login user here
        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect('home');
        }
        // If error occurs
        return redirect('register')->withError('Error');
    }
    public function login_view()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        //Validation
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // login code
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {

            return redirect('home');
        }
        return redirect('login')->withError('Login details are not valid');
    }
    public function home()
    {
        return view('home');
    }
    //Logout User
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('');
    }
}
