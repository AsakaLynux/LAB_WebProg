<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\Actor;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        return view('member.detail-movie', ['movies' => $movie]);
    }

    public function get_actor_by_id($id) {
        $actor = Actor::find($id);
        return view('member.detail-actor', ['actor' => $actor]);
    }

    public function get_user_by_id($id) {
        $user = User::find($id);
        return view('member.profile', ['user' => $user]);
    }

    public function get_watchlist_by_id($id) {
        $watchlist = Watchlist::query()
        ->Where('user_id', 'LIKE', $id)
        ->get();
        $user = User::find($id)->movies;
        // dd($user);
        return view('member.watchlist')->with([
            'watchlists' => $watchlist,
            'users' => $user,
        ]);
    }

}
