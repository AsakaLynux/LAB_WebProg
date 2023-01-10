<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    //

    public function register(Request $request) {
        $validateData = $request->validate([
            'username' => 'required|min:5|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|alpha_num|confirmed|min:6',
        ]);

        $time = Carbon::now()->format('Y-m-d');

        $user = new User();
        $user->username = $validateData['username'];
        $user->email = $validateData['email'];
        $user->password = $validateData['password'];

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->date_joined = $time;


        $user->save();
        return redirect('/login');
    }

    public function login(Request $request) {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
        ]);


        $user = new User();
        $user->email = $validateData['email'];
        $user->password = $validateData['password'];

        $users = User::query()
        ->Where('email', 'LIKE', $request->email)
        ->get();



        if($request->remember) {
            Cookie::queue('myEmail', $request->email, 120);
            Cookie::queue('myPassword', $request->password, 120);
        }

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)) {
            if(Auth::user()->role == 'admin') {
                return redirect('/admin');
            }


            $movie = Movie::all();
            $actor = Actor::all();
            $genre = Genre::all();
            return view('member.home')->with([
                'movies' => $movie,
                'users' => $users,
                'actors' => $actor,
                'genres' => $genre,
            ]);
            // return redirect('/user');
        }
        return redirect()->back();
    }



    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    public function get_user_by_id(Request $request) {
        // $user = User::find($id);
        $user = User::query()
        ->Where('email', 'LIKE', $request->email)
        ->get();
        return view('member.update-profile', ['users' => $user]);
    }

    public function update(Request $request) {

        $user = User::find($request->id_update);


        $fileProfile = $request->file('image');
        if($fileProfile != null) {
            $imageNameProfile = $request->id_update.'_profile'.'.'.$fileProfile->getClientOriginalExtension();
            Storage::putFileAs('public/images/member/', $fileProfile, $imageNameProfile);
            $imageNameProfile = 'storage/images/member/'. $imageNameProfile;

            Storage::delete('public/images/member/'.$user->image_url);
            $user->image_url = $imageNameProfile;

        }

        $user->username = $request->username != null ? $request->username : $user->username;
        $user->email = $request->email != null ? $request->email : $user->email;
        $user->username = $request->username != null ? $request->username : $user->username;
        $user->dob = $request->dob != null ? $request->dob : $user->dob;
        $user->phone = $request->phone != null ? $request->phone : $user->phone;

        $user->save();

        $user = User::query()
        ->Where('email', 'LIKE', $request->email)
        ->get();
        return view('member.profile', ['users' => $user]);
        // return redirect("/profile/$request->id_update");


    }

    public function get(Request $request) {
        $user = User::query()
        ->Where('email', 'LIKE', $request->email)
        ->get();
        $genre = Genre::all();
        $movie = Movie::where("title", "LIKE", "%$request->searchMovie%")->paginate()->appends(["search"=>$request->searchMovie]);
        $actor = Actor::all();

        return view('member.home')->with([
            'movies' => $movie,
            'actors' => $actor,
            'users' => $user,
            'genres' => $genre,
        ]);
    }
}
