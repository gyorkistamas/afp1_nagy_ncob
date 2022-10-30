<?php

use App\Http\Controllers\FeedbackController;
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

//----------------- Login and register routes ---------------------

//Route to register form:
Route::get('/register', [UserController::class, 'create']);

//Route to upload user to database (register logic):
Route::post('/users', [UserController::class, 'store']);

//Route to login form:
Route::get('/login', [UserController::class, 'login']);

//Route to login user (login logic):
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/logout', [UserController::class, 'logout']);


//--------- Feedback routes ----------------------------------------

//Route to all feedbacks
Route::get('feedback/all', [FeedbackController::class, 'index']);

//Route to feedback form
Route::get('/feedback/new', [FeedbackController::class, 'create']);

//Route to feedback upload
Route::post('/feedback/new', [FeedbackController::class, 'store']);

//Route to feedback updateRead
Route::put('/feedback/all/{id}', [FeedbackController::class, 'update']);
