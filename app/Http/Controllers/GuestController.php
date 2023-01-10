<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function get(Request $request) {
        $movie = Movie::query()->where("title", "LIKE", "%$request->searchMovie%")->paginate()->appends([
            "search"=>$request->searchMovie,
        ]);
        // $movie = Movie::query()->where("id", "LIKE", "%rand(0, count($movie)", "or" ,"genre", "LIKE", "%$request->genre%")->paginate()->appends([
        //     "search"=>$request->searchMovie,
        // ]);
        $actor = Actor::where("name", "LIKE", "%$request->searchActor%")->paginate()->appends(["search"=>$request->searchActor]);
        $genre = Genre::all();
        return view('guest.home')->with([
            'movies' => $movie,
            'actors' => $actor,
            'genres' => $genre,
        ]);
    }

    public function get_movie(Request $request) {
        $movie = Movie::where("title", "LIKE", "%$request->searchMovie%")->paginate()->appends(["search"=>$request->searchMovie]);
        return view('guest.movies')->with([
            'movies' => $movie,
        ]);
    }

    public function get_actor(Request $request) {
        $actor = Actor::where("name", "LIKE", "%$request->searchActor%")->paginate()->appends(["search"=>$request->searchActor]);
        $user = User::query()
        ->Where('email', 'LIKE', $request->email)
        ->get();
        return view('guest.actors')->with([
            'users' => $user,
            'actors' => $actor,
        ]);
    }

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        $actor = Actor::all();
        $get = Movie::all();
        return view('guest.detail-movie')->with([
            'movies' => $movie,
            'actors' => $actor,
            'gets' => $get,
        ]);
    }

    public function get_actor_by_id($id) {
        $actor = Actor::find($id);
        $movie = Movie::query()
        ->where("actor" , "LIKE" , "%$actor->name%")->get();
        return view('guest.detail-actor')->with([
            'actors' => $actor,
            'movies' => $movie,
        ]);
    }
}
