<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function createActor(Request $request) {

        $validateData = $request->validate([
            'name' => 'required|min:3',
            'gender' => 'required',
            'biography' => 'required|min:10',
            'dob' => 'required',
            'place_of_birth' => 'required',
            'image_url' => 'required|image|mimes:jpg,png,jpeg,gif',
            'popularity' => 'required|numeric',
        ]);
    }
}
