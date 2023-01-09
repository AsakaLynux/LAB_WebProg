<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
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
        return view('guest.home-guest')->with([
            'movies' => $movie,
            'actors' => $actor,
            'genres' => $genre,
        ]);
    }
}
