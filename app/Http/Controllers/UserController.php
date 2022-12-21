<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_movie() {
        $movie = Movie::all();
        return view('user.user', ['movies' => $movie]);
    }
}
