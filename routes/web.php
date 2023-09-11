<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CustomerController;
use \App\Http\Controllers\UserController;

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

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/newuser' , [CustomerController::class , 'newuser'])->name('newuser');
Route::post('newuser' , [CustomerController::class, 'adduser'])->name('adduser');

Route::get('/panel' , [CustomerController::class , 'panel'])->name('panel');
Route::get('/login' , [CustomerController::class, 'login'])->name('login');
Route::get('/' , function(){
    return 'home';
})->name('login');

Route::post('/login' , [UserController::class, 'loginPanel'])->name('loginPanel');
Route::get('logout' , [UserController::class, 'logout'])->name('logout');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/userslist',  [CustomerController::class , 'userslist'])->name('userslist');
Route::get('/edituserpage/{id}' , [CustomerController::class, 'showeditpage'])->name('showeditpage');
Route::post('/edituserpage/{id}' , [CustomerController::class, 'edit'])->name('edituserpage');
Route::get('/newproduct' , [ProductController::class , 'newproduct'])->name('newproduct');
