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
Route::post('/user', [AuthController::class, 'get'])->middleware('securityUser');
Route::post('/actors', [UserController::class, 'get_actor'])->middleware('securityUser');
Route::post('/movies', [UserController::class, 'get_movie'])->middleware('securityUser');
Route::post('/detail-movie/{id}', [UserController::class, 'get_movie_by_id'])->middleware('securityUser');
Route::post('/detail-actor/{id}', [UserController::class, 'get_actor_by_id'])->middleware('securityUser');
Route::post('/profile/{id}', [UserController::class, 'get_user_by_id'])->middleware('securityUser');
Route::post('/update-profile/{id}', [AuthController::class, 'get_user_by_id'])->middleware('securityUser');
Route::post('/update-profile', [AuthController::class, 'update'])->middleware('securityUser');
Route::post('/watchlist/{id}', [UserController::class, 'get_watchlist_by_id'])->middleware('securityUser');
Route::post('/add-wathclist', [WatchlistController::class, 'create'])->middleware('securityUser');
Route::post('/update-wathclist/{id}', [WatchlistController::class, 'update'])->middleware('securityUser');

// Admin
Route::get('/admin', [AdminController::class, 'get'])->middleware('securityAdmin');

// Movie
Route::get('/create-movie', [AdminController::class, 'get_genre'])->middleware('securityAdmin');
Route::post('/create-movie', [MovieController::class, 'create'])->middleware('securityAdmin');
Route::post('/update-movie', [MovieController::class, 'update'])->middleware('securityAdmin');
Route::get('/update-movie/{id}', [MovieController::class, 'get_movie_by_id'])->middleware('securityAdmin');
Route::get('/detail-movies/{id}', [AdminController::class, 'get_movie_by_id'])->middleware('securityAdmin');
Route::post('/delete-movie/{id}', [MovieController::class, 'delete'])->middleware('securityAdmin');

// Actor
Route::get('/actor', [AdminController::class, 'get_actor'])->middleware('securityAdmin');
Route::get('/create-actor', function() {
    return view('admin.addActor');
})->middleware('securityAdmin');
Route::post('/create-actor', [ActorController::class, 'create'])->middleware('securityAdmin');
Route::get('/update-actor/{id}', [ActorController::class, 'get_actor_by_id'])->middleware('securityAdmin');
Route::post('/update-actor', [ActorController::class, 'update'])->middleware('securityAdmin');
Route::get('/detail-actors/{id}', [AdminController::class, 'get_actor_by_id'])->middleware('securityAdmin');
Route::post('/delete-actor/{id}', [ActorController::class, 'delete'])->middleware('securityAdmin');

// Guest

// Movie
Route::get('/movis', [GuestController::class, 'get_movie']);
Route::get('/detail-movis/{id}', [GuestController::class, 'get_movie_by_id']);

// Actor
Route::get('/actos', [GuestController::class, 'get_actor']);
Route::get('/detail-actos/{id}', [GuestController::class, 'get_actor_by_id']);







