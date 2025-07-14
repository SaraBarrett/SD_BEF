<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('all_users');
});

Route::get('/hello', function(){
    return '<h1>Olá Mundo</h1>';
});


