<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testing',function(){
    $data = "This is data";
    return view('testing',[
        'data' => $data
    ]);
});