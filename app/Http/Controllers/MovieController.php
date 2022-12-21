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
            'character_name' => 'required',
            'genre' => 'required',
            'actor' => 'required',
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
        Storage::putFileAs('public/images', $fileThumbnail, $imageNameThumbnail);

        $filebackground = $request->file('background');
        $imageNameBackground = $request->title.'_background'.'.'.$filebackground->getClientOriginalExtension();
        Storage::putFileAs('public/images', $filebackground, $imageNameBackground);

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->genre = $request->genre;
        $movie->actor = $request->actor;
        $movie->character_name = $request->character_name;
        $movie->director = $request->director;
        $movie->release_date = $request->release_date;
        $movie->image_thumbnail = $imageNameThumbnail;
        $movie->background = $imageNameBackground;

        $movie->save();

        return redirect()->back();

    }
}
