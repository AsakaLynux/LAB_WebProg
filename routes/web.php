<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/user', function () {
//     return view('user.user');
// });


// Auth
Route::get('/', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

// User
Route::get('/user', [UserController::class, 'get'])->middleware('securityUser');

Route::get('/detail-movie/{id}', [UserController::class, 'get_movie_by_id']);
Route::get('/profile/{id}', function() {
    return view('user.profile');
});


// Admin
Route::get('/create-movie', function () {
    return view('admin.create-movie');
});
Route::post('/create-movie', [MovieController::class, 'create']);

Route::get('/update-movie', function () {
    return view('admin.update-movie');
});

Route::get('/create-actor', function() {
    return view('admin.create-actor');
});

Route::post('/create-actor', [ActorController::class, 'create']);

Route::post('/update-movie', [MovieController::class, 'update']);
Route::get('/admin', [AdminController::class, 'get_movie'])->middleware('securityAdmin');
Route::get('/detail-movies/{id}', [AdminController::class, 'get_movie_by_id']);

// Guest







