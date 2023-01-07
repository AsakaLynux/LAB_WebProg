<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    //

    public function create(Request $request) {
        $watchlist = new Watchlist();

        $validateData = $request->validate([
            'status' => 'required',
        ]);

        $watchlist->status = $validateData['status'];

        $watchlist->movies_id = $request->movie_id;
        $watchlist->status = $request->status;
        $watchlist->user_id = $request->user_id;

        $watchlist->save();

        $user = User::query()
        ->Where('id', 'LIKE', $request->user_id)
        ->get();
        $genre = Genre::all();
        $movie = Movie::where("title", "LIKE", "%$request->searchMovie%")->paginate()->appends(["search"=>$request->searchMovie]);
        $actor = Actor::all();
        return view('member.home')->with([
            'movies' => $movie,
            'actor' => $actor,
            'users' => $user,
            'genres' => $genre,
        ]);
    }

}
