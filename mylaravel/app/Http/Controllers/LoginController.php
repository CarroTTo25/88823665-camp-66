<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function index(){
        return view ('login');
    }
}
