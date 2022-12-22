<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_movie() {
        $movie = Movie::all();
        return view('user.home', ['movies' => $movie]);
    }

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        return view('user.detail-movie', ['movies' => $movie]);
    }
}
