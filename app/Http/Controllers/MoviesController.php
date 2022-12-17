<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //

    public function createMovie(Request $request) {

        $validateData = $request->validate([
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:8',
            'genre' => 'required',
            'actor' => 'required',
            'character_name' => 'required',
            'director' => 'required|min:3',
            'release_date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif',
            'background' => 'required|image|mimes:jpg,png,jpeg,gif',
        ]);
    }
}
