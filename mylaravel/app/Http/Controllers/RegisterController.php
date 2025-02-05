<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    function index(){
        return view ('register');
    }

    function create(Request $req){
        print_r($req->input());

        // Correct variable name
        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password')); // Hash the password before saving
        $user->save();

        return redirect('/users');
    }
}
