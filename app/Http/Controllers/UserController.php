<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        $actor = Actor::all();
        $get = Movie::all();
        return view('member.detail-movie')->with([
            'movies' => $movie,
            'actors' => $actor,
            'gets' => $get,
        ]);
    }

    public function get_actor_by_id($id) {
        $actor = Actor::find($id);
        $movie = Movie::query()
        ->where("actor" , "LIKE" , "%$actor->name%")->get();
        return view('member.detail-actor')->with([
            'actors' => $actor,
            'movies' => $movie,
        ]);
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

    public function get_actor(Request $request) {
        $movie = Movie::query()->where("title", "LIKE", "%$request->searchMovie%", "or" ,"genre", "LIKE", "%$request->genre%")->paginate()->appends([
            "search"=>$request->searchMovie,
        ]);
        $actor = Actor::where("name", "LIKE", "%$request->searchActor%")->paginate()->appends(["search"=>$request->searchActor]);
        $genre = Genre::all();
        $user = User::query()
        ->Where('email', 'LIKE', $request->email)
        ->get();
        return view('member.actors-user')->with([
            'movies' => $movie,
            'users' => $user,
            'actors' => $actor,
        ]);
    }

}
