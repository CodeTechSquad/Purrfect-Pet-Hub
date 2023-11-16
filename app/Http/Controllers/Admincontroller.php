<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller {
    public function showLoginForm() {
        return view('pages.admin.auth.login'); 
    }

    public function showHome() {
        return view('pages.admin.home'); 
    }

    public function login_handler(Request $request) {
        $request->validate([
            'email' => 'required|email',
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

    public function logout()
    {
        return view('pages.admin.auth.login');
    }

    //User Management
    public function index()
    {
        $users = User::all();
        return view('pages.admin.home')->with('users', $users);
    }
    

    public function edit(User $user)
    {
        return view('pages.admin.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.home')->with('success', 'User deleted successfully.');
    }
}
    

