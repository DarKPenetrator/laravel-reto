<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/hello', [HelloController::class, 'greet']);
Route::get('/hello/{name}', [HelloController::class, 'greetWithName']);
Route::get('/params/hello', [HelloController::class, 'greetWithParams']);
