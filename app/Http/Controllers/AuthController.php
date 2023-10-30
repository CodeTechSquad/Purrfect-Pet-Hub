<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login () {
        return view("pages.login");
    }

    public function register () {
        return view("pages.register");
    }
    
    public function registerUser (Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6|max:12'
        ]);
        //Connect to database
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->password);
        $query = $user->save();
        if($query) {
            return back()->with('success', 'You have been successfully registered');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function loginUser (Request $request) {
        $request->validate([
            'email' => 'email|required|',
            'password' => 'required|min:6|max:12'
        ]);
        //Database
        $user = User::where('email', '=', $request->email)->first();
        if($user) {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('LoggedUser', $user->id);
                return redirect('home');
            } else {
                return back()->with('fail', 'Invalid password');
            }
        } else {
            return back()->with('fail', 'No account found for this email');
        }
}

public function home () {
    return view("pages.home");
}
}