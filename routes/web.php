<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('utils.homepage');
})->name('home_name');

Route::get('/hello', function(){
    return "<h1>Olá Mundo</h1> <a href=".route('home_name').">Voltar</a>";
})->name('hello_route_name');

Route::get('/curso', function(){
    return '<h1>Olá alunos SD</h1>';
});

Route::get('/modules/{name}', function($name){
    return '<h1>Este é o módulo de:'.$name.'</h1>';
});




Route::fallback(function(){
    return "<a href=".route('hello_route_name').">Estás perdido?</a>";
});
