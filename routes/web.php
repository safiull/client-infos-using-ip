<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('display-user', [App\Http\Controllers\UserController::class, 'index']);
