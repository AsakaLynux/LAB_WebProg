<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get() {
        $movie = Movie::all();
        $actor = Actor::all();
        return view('admin.home')->with([
            'movies' => $movie,
            'actors' => $actor
        ]);
    }

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        return view('admin.detail-movie', ['movies' => $movie]);
    }

    public function get_actor_by_id($id) {
        $actor = Actor::find($id);
        return view('admin.detail-actor', ['actor' => $actor]);
    }

}
