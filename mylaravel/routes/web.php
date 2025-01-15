<?php

use Illuminate\Support\Facales\Route;
use App\Http\Controller\MyController;

Route :: get('mycontroller/{id?}',
    [MyController :: class , 'myfunction']);

Route :: post ('mycontroller/{id?}',
    [MyController :: class , 'myfunction']);

Route :: get ('/',function() {
    return view('Welcom');
});

Route :: get ('/hello/{id?}',
function($val = "")
{
    return "<h1>Hello World$val</h1>";
});