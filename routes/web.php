<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchlistController;
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
Route::get('/', [GuestController::class, 'get']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

// member
Route::get('/user', [AuthController::class, 'get'])->middleware('securityUser');

Route::get('/detail-movie/{id}', [UserController::class, 'get_movie_by_id']);
Route::get('/detail-actor/{id}', [UserController::class, 'get_actor_by_id']);
Route::get('/profile/{id}', [UserController::class, 'get_user_by_id']);
Route::get('/update-profile/{id}', [AuthController::class, 'get_user_by_id']);
Route::post('/update-profile', [AuthController::class, 'update']);
Route::get('/watchlist/{id}', [UserController::class, 'get_watchlist_by_id']);
Route::post('/add-wathclist', [WatchlistController::class, 'create']);

// Admin
Route::get('/admin', [AdminController::class, 'get'])->middleware('securityAdmin');

// Movie
Route::get('/create-movie', [AdminController::class, 'get_genre'])->middleware('securityAdmin');
Route::post('/create-movie', [MovieController::class, 'create'])->middleware('securityAdmin');
Route::post('/update-movie', [MovieController::class, 'update'])->middleware('securityAdmin');
Route::get('/update-movie/{id}', [MovieController::class, 'get_movie_by_id'])->middleware('securityAdmin');
Route::get('/detail-movies/{id}', [AdminController::class, 'get_movie_by_id'])->middleware('securityAdmin');
Route::post('/detail-movies/{id}', [AdminController::class, 'get_movie_by_id'])->middleware('securityAdmin');
Route::post('/delete-movie/{id}', [MovieController::class, 'delete'])->middleware('securityAdmin');

// Actor
Route::get('/actor', [AdminController::class, 'get_actor'])->middleware('securityAdmin');
Route::get('/create-actor', function() {
    return view('admin.create-actor');
})->middleware('securityAdmin');
Route::post('/create-actor', [ActorController::class, 'create'])->middleware('securityAdmin');
Route::post('/update-actor/{id}', [ActorController::class, 'get_actor_by_id'])->middleware('securityAdmin');
Route::post('/update-actor', [ActorController::class, 'update'])->middleware('securityAdmin');
Route::get('/detail-actors/{id}', [AdminController::class, 'get_actor_by_id'])->middleware('securityAdmin');
Route::post('/detail-actors/{id}', [AdminController::class, 'get_actor_by_id'])->middleware('securityAdmin');
Route::post('/delete-actor/{id}', [ActorController::class, 'delete'])->middleware('securityAdmin');

// Guest







