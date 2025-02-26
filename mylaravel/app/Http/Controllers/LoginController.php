<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    //
    function index (){
        return view('login');
    }
    function Login(Request $req){
        $user = User::where('email', $req->email)->first();
        if ($user && Hash::check($req->password, $user->password)) {
            return redirect('/users');
        } else {
            return redirect('/login');

        }
    }
}
