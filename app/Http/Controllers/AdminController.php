<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get(Request $request) {
        $movie = Movie::where("title", "LIKE", "%$request->searchMovie%")->paginate(3)->appends(["search"=>$request->searchMovie]);
        $actor = Actor::where("name", "LIKE", "%$request->searchActor%")->paginate()->appends(["search"=>$request->searchActor]);
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

    public function get_genre() {
        $genre = Genre::all();
        return view('admin.create-movie', ['genres' => $genre]);
    }

}
