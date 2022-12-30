<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\Actor;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        return view('user.detail-movie', ['movies' => $movie]);
    }

    public function get_actor_by_id($id) {
        $actor = Actor::find($id);
        return view('user.detail-actor', ['actor' => $actor]);
    }

    // public function update() {

    //     return view('user.profile', ['user' => $user]);
    // }
}
