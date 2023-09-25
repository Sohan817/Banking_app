<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        return redirect('signup');
    }
}
