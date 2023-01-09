<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get(Request $request) {
        $movie = Movie::query()->where("title", "LIKE", "%$request->searchMovie%", "or" ,"genre", "LIKE", "%$request->genre%")->paginate()->appends([
            "search"=>$request->searchMovie,
        ]);
        // $movie = Movie::query()->where("id", "LIKE", "%rand(0, count($movie)", "or" ,"genre", "LIKE", "%$request->genre%")->paginate()->appends([
        //     "search"=>$request->searchMovie,
        // ]);
        $actor = Actor::where("name", "LIKE", "%$request->searchActor%")->paginate()->appends(["search"=>$request->searchActor]);
        $genre = Genre::all();
        return view('admin.home')->with([
            'movies' => $movie,
            'actors' => $actor,
            'genres' => $genre,
        ]);
    }

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        $actor = Actor::all();
        $get = Movie::all();
        return view('admin.detail-movie')->with([
            'movies' => $movie,
            'gets' => $get,
            'actors' => $actor,
        ]);
    }

    public function get_actor_by_id($id) {
        $actor = Actor::find($id);
        return view('admin.detail-actor', ['actor' => $actor]);
    }

    public function get_genre() {
        $genre = Genre::all();
        $actor = Actor::all();
        return view('admin.create-movie')->with([
            'genres' => $genre,
            'actors' => $actor,
        ]);
    }

}
