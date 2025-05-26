<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('iniciosesion');
});
Route::get('/usuario', function () {
    return view('usuario');
});
Route::get('/catalogo', function () {
    return view('catalogo');
});
