<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_movie() {
        $movie = Movie::all();
        return view('admin.home', ['movies' => $movie]);
    }
}
