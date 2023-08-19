<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/index2', function () {
    return view('index2');
})->name('index2');

Route::get('/panel', function (){
    return view('panel');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function() {
    return view('register');
})->name('register');

