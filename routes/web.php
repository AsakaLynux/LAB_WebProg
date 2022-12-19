<?php

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





Route::get('/user', function () {
    return view('user.user');
});

Route::get('/', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);


Route::get('/admin', [UserController::class, 'admin'])->middleware('securty');
