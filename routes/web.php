<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/auth/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);

