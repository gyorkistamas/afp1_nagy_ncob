<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserListController;

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
Route::get('/login', [UserController::class, 'login'])->name('login');

//Route to login user (login logic):
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/logout', [UserController::class, 'logout']);

//----------------- User routes ---------------------
Route::get('/users/{userID}/view', [UserController::class, 'view'])->middleware('auth');


//--------- Feedback routes ----------------------------------------

//Route to all feedbacks
Route::get('feedback/all', [FeedbackController::class, 'index']);

//Route to feedback form
Route::get('/feedback/new', [FeedbackController::class, 'create']);

//Route to feedback upload
Route::post('/feedback/new', [FeedbackController::class, 'store']);

//Route to feedback updateRead
Route::put('/feedback/all/{id}', [FeedbackController::class, 'update']);


//--------- Game routes --------------------------------------------

Route::get('/new', function(){ return view('game/newGame'); });

Route::post('/generateNewGame', [GameController::class, 'generate']);

Route::get('/play', function(){ return view('game/game'); });

//--------- Admin routes --------------------------------------------

//Route::get('/UserDoList', [UserListController::class, 'do_list']);
Route::get('/UserList', function() {return view('users/list'); } );
