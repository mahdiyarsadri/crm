<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/userslist', [UserController::class, 'userslist'])->name('userslist');
Route::get('/edituserpage/{id}' , [UserController::class, 'showeditpage'])->name('showeditpage');
Route::post('/edituserpage/{id}' , [UserController::class, 'edit'])->name('edituserpage');
Route::get('/newuser' , [UserController::class , 'newuser'])->name('newuser');
Route::post('newuser' , [UserController::class, 'adduser'])->name('adduser');
Route::post('/login' , [UserController::class , 'login']);
Route::delete('/deleteuser/{id}' , [UserController::class, 'delete'])->name('delete');

Route::group([
    "middleware" => "auth:sanctum"
],function (){
    Route::post('/logout' , [UserController::class, 'logout']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

