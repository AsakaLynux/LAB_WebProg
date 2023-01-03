<?php

namespace App\Http\Controllers;

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
            'character_name1' => 'required',
            'character_name2' => 'required',
            // 'character_name.*' => 'required|string|distinct',
            'genre' => 'required',
            'actor1' => 'required',
            'actor2' => 'required',
        ]);

        $movie = new Movie();

        // Validasi
        $movie->title = $validateData['title'];
        $movie->description = $validateData['description'];
        $movie->genre = $validateData['genre'];
        $movie->actor1 = $validateData['actor1'];
        $movie->actor2 = $validateData['actor2'];
        $movie->character_name1 = $validateData['character_name1'];
        $movie->character_name2 = $validateData['character_name2'];
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
        $movie->genre = $request->genre;
        $movie->actor1 = $request->actor1;
        $movie->actor2 = $request->actor2;
        $movie->character_name1 = $request->character_name1;
        $movie->character_name2 = $request->character_name2;
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
        $movie->genre = $request->genre != null ? $request->genre : $movie->genre;
        $movie->actor1 = $request->actor1 != null ? $request->actor1 : $movie->actor1;
        $movie->actor2 = $request->actor2 != null ? $request->actor2 : $movie->actor2;
        $movie->character_name1 = $request->character_name1 != null ? $request->character_name1 : $movie->character_name1;
        $movie->character_name2 = $request->character_name2 != null ? $request->character_name2 : $movie->character_name2;
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
        return view('admin.update-movie', ['movies' => $movie]);
    }


}
