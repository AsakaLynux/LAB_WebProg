<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function register(Request $request) {
        $validateData = $request->validate([
            'username' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            // 'password' => 'required|alpha_num|min:6|confirmed',
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

        if($request->Remember) {
            Cookie::queue('myCookie', $request->email, 5);
        }

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)) {
            // Session::put('mySession', [
            //     'email'=>$request->email,
            //     'password'=>$request->password]
            // );
            if(Auth::user()->role == 'admin') {
                return redirect('/admin');
            }
            // $movie = Movie::all();
            return redirect('/user');
        }

        return redirect()->back();


    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }


}
