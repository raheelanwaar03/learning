<?php

namespace App\Http\Controllers;

use App\Models\LoginHistory;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginReq(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $validated['email'])->get();
        if ($user->count() < 1) {
            return "Wrong Email";
        }
        $user = User::where('email', $validated['email'])->where('password',$validated['password'])->get();
        if ($user->count() < 1) {
            return "Wrong Password";
        }
        session(['pass'=> $user]);
        // saving the login history of this user
        $task = new LoginHistory();
        $task->user_id = $user[0]->id;
        $task->save();
        return redirect()->route('index');
    }
    public function register()
    {
        return view('register');
    }
    public function registerReq(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user->fname = $validated['fname'];
        $user->lname = $validated['lname'];
        $user->username = $validated['username'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->save();
        session(['pass'=> $user]);
        return redirect(route('login'))->with('message','Account Created Sussessfully');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('login');
    }
}
