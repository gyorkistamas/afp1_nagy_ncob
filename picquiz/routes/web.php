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
Route::get('/users/edit', [UserController::class, 'edit'])->middleware('auth');
Route::post('/users/update', [UserController::class, 'update'])->middleware('auth');


//--------- Feedback routes ----------------------------------------

//Route to all feedbacks
Route::get('feedback/all', [FeedbackController::class, 'index'])->middleware('admin');

//Route to feedback form
Route::get('/feedback/new', [FeedbackController::class, 'create'])->middleware('auth');

//Route to feedback upload
Route::post('/feedback/new', [FeedbackController::class, 'store'])->middleware('auth');

//Route to feedback updateRead
Route::put('/feedback/all/{id}', [FeedbackController::class, 'update'])->middleware('admin');


//--------- Game routes --------------------------------------------

Route::get('/new', [GameController::class, '_new']);

Route::post('/generateNewGame', [GameController::class, 'generate']);

Route::get('/play/{id}/{puzzle}', [GameController::class, 'play']);

Route::post('/play/{id}/{puzzle}/validate', [GameController::class, 'do_validate']);

Route::get('/results/{id}', [GameController::class, 'summarize']);

Route::get('/games/list', [GameController::class, 'list'])->middleware('admin');

Route::get('/games/new', [GameController::class, 'create'])->middleware('admin');
Route::post('games/new', [GameController::class, 'store'])->middleware('admin');

//--------- Admin routes --------------------------------------------

//Route::get('/UserDoList', [UserListController::class, 'do_list']);
Route::get('/UserList', function() {return view('users/list'); } )->middleware('admin');

Route::post('/toggleBan', [UserController::class, 'user_list_toggle'] )->middleware('admin');

Route::post('/toggleAdmin', [UserController::class, 'user_list_toggle'] )->middleware('admin');


//--------- Error routes --------------------------------------------
Route::get('/posttoobig', function() {return view('errors.postTooLarge'); })->name('postError');
