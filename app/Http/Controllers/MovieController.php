<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function create(Request $request) {
        $validateData = $request->validate([
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:8',
            'director' => 'required|min:3',
            'release_date' => 'required',
            'image_thumbnail' => 'required|mimes:jpeg,jpg,png,gif',
            'background' => 'required|mimes:jpeg,jpg,png,gif',
            'character_name' => 'required|array',
            'genre' => 'required|array',
            'actor' => 'required|array',
        ]);

        $movie = new Movie();

        // Validasi
        $movie->title = $validateData['title'];
        $movie->description = $validateData['description'];
        $movie->genre = $validateData['genre'];
        $movie->actor = $validateData['actor'];
        $movie->character_name = $validateData['character_name'];
        $movie->director = $validateData['director'];
        $movie->release_date = $validateData['release_date'];
        $movie->image_thumbnail = $validateData['image_thumbnail'];
        $movie->background = $validateData['background'];


        // Insert
        $fileThumbnail = $request->file('image_thumbnail');
        $imageNameThumbnail = $request->title.'_thumbnail'.'.'.$fileThumbnail->getClientOriginalExtension();
        Storage::putFileAs('public/images/movie/thumbnail/', $fileThumbnail, $imageNameThumbnail);
        $imageNameThumbnail = 'storage/images/movie/thumbnail/'.$imageNameThumbnail;

        $fileBackground = $request->file('background');
        $imageNameBackground = $request->title.'_background'.'.'.$fileBackground->getClientOriginalExtension();
        Storage::putFileAs('public/images/movie/background/', $fileBackground, $imageNameBackground);
        $imageNameBackground = 'storage/images/movie/background/'.$imageNameBackground;

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->genre = implode(", ", $request->genre);
        $movie->actor = implode(", ", $request->actor);
        $movie->character_name = implode(", ", $request->character_name);
        $movie->director = $request->director;
        $movie->release_date = $request->release_date;
        $movie->image_thumbnail = $imageNameThumbnail;
        $movie->background = $imageNameBackground;

        $movie->save();

        return redirect('/admin');

    }

    public function update(Request $request) {

        $fileThumbnail = $request->file('image_thumbnail');
        $fileBackground = $request->file('background');

        $movie = Movie::find($request->id_update);

        $validateData = $request->validate([
            'character_name' => 'required|array',
            'genre' => 'required|array',
            'actor' => 'required|array',
        ]);

        $movie->genre = $validateData['genre'];
        $movie->actor = $validateData['actor'];
        $movie->character_name = $validateData['character_name'];

        if($fileThumbnail != null) {
            $imageNameThumbnail = $request->title.'_thumbnail'.'.'.$fileThumbnail->getClientOriginalExtension();
            Storage::putFileAs('public/images/movie/thumbnail/', $fileThumbnail, $imageNameThumbnail);
            $imageNameThumbnail = 'storage/images/movie/thumbnail/'.$imageNameThumbnail;

            Storage::delete('public/images/movie/thumbnail/'.$movie->image_thumbnail);
            $movie->image_thumbnail = $imageNameThumbnail;
        }

        if($fileBackground != null) {
            $imageNameBackground = $request->title.'_background'.'.'.$fileBackground->getClientOriginalExtension();
            Storage::putFileAs('public/images/movie/background/', $fileBackground, $imageNameBackground);
            $imageNameBackground = 'storage/images/movie/background/'.$imageNameBackground;

            Storage::delete('public/images/movie/background/'.$movie->background);
            $movie->background = $imageNameBackground;
        }


        $movie->title = $request->title != null ? $request->title : $movie->title;
        $movie->description = $request->description != null ? $request->description : $movie->description;
        $movie->genre = implode(", ", $request->genre != null ? $request->genre : $movie->genre);
        $movie->actor = implode(", ",$request->actor != null ? $request->actor : $movie->actor);
        $movie->character_name =implode(", ",$request->character_name != null ? $request->character_name : $movie->character_name);
        $movie->director = $request->director != null ? $request->director : $movie->director;
        $movie->release_date = $request->release_date != null ? $request->release_date : $movie->release_date;


        $movie->save();

        return redirect("/detail-movies/$request->id_update");
    }

    public function delete($id){
        $movie = Movie::find($id);
        Storage::delete("public/images/movie/background/".$movie->background);
        Storage::delete("public/images/movie/thumbnail/".$movie->image_thumbnail);
        $movie->delete();
        return redirect('/admin');
    }

    public function get_movie_by_id($id) {
        $movie = Movie::find($id);
        $genre = Genre::all();
        $actor = Actor::all();
        return view('admin.update-movie')->with([
            'movies' => $movie,
            'genres' => $genre,
            'actors' => $actor,
        ]);
    }


}
