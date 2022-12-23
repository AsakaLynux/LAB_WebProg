<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_movie() {
        $movie = Movie::all();
        return view('admin.home', ['movies' => $movie]);
    }

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        return view('admin.detail-movie', ['movies' => $movie]);
    }
}
