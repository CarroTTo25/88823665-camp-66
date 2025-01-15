<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('multiplication_input');
});

Route::post('/multiplication-table', function (Illuminate\Http\Request $request) {
    $number = $request->input('number');
    return view('multiplication_table', compact('number'));
});
