<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    public function showLoginForm() {
        return view('pages.admin.login'); 
    }

    public function showHome() {
        return view('pages.admin.home'); 
    }

    public function login_handler(Request $request) {
        $request->validate([
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6|max:12'
        ]);

        //For checking correct credentials
        $creds = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if(Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        } else {
            session()->flash('fail', 'Incorrect credentials');
            return redirect()->route('admin.login');
        }
    }
}
