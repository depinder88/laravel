<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	
    public function index(){
    	if(Auth::check()){
    		return redirect()->intended('blog');
    	}
    	return view('front.register.login');
    }

    public function login(Request $request){
    	$this->validate($request, [
		    'email' => 'required|email',
		    'password' => 'required'
		]);
    	$email=$request->input('email');
    	$password=$request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('blog');
        }

        return redirect()->back()->withInput()->with('message', 'Login Failed');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->intended('/');
    }
}
