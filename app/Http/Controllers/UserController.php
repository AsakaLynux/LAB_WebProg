<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get() {
        $movie = Movie::all();
        $user = User::all();
        return view('user.home')->with([
            'movies' => $movie,
            'user' => $user,
        ]);
    }

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        return view('user.detail-movie', ['movies' => $movie]);
    }

    // public function update() {

    //     return view('user.profile', ['user' => $user]);
    // }
}
