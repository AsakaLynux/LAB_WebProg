<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActorController extends Controller
{
    public function create(Request $request) {
        $validateData = $request->validate([
            'name'=> 'required|min:3',
            'biography' => 'required|min:10',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'place_of_birth' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'popularity' => 'required|numeric',
        ]);

        $actor = new Actor();
        $actor->name = $validateData['name'];
        $actor->biography = $validateData['biography'];
        $actor->image_url = $validateData['image'];
        $actor->place_of_birth = $validateData['place_of_birth'];
        $actor->dob = $validateData['dob'];
        $actor->gender = $validateData['gender'];
        $actor->popularity = $validateData['popularity'];

        $fileActor = $request->file('image');
        $imageNameActor = $request->name.'.'.$fileActor->getClientOriginalExtension();
        Storage::putFileAs('public/images/actor/', $fileActor, $imageNameActor);
        $imageNameActor = 'storage/images/actor/'.$imageNameActor;

        $actor->name = $request->name;
        $actor->gender = $request->gender;
        $actor->biography = $request->biography;
        $actor->dob = $request->dob;
        $actor->place_of_birth = $request->place_of_birth;
        $actor->image_url = $imageNameActor;
        $actor->popularity = $request->popularity;

        $actor->save();

        return redirect('/admin');


    }
}
