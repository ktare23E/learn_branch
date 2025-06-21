<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/new',function(){
    $data = "This a test data";
    return view('new',[
        'data' => $data
    ]);
});
