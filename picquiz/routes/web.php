<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainpage');
});

//Route to register form:
Route::get('/register', [UserController::class, 'create']);

//Route to upload user to database (register logic):
Route::post('/users', [UserController::class, 'store']);

//Route to login form:
Route::get('/login', [UserController::class, 'login']);

//Route to login user (login logic):
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/logout', [UserController::class, 'logout']);
