<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/new',function(){
    $data = "This a test data";
    return view('new',compact($data));
});


Route::get('/testing',function(){
    $data = "This is data";
    return view('testing',[
        'data' => $data
    ]);
});