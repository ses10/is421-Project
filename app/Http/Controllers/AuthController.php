<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
	//just return login view
    public function login()
    {
    	return view('auth.login'); 
    }

    public function handleLogin(Request $requestk)
    {
    	$data = $request->only('email', 'password');

    	//attempt login
    	if(\Auth::attempt($data)){
    		return 'logged in';
    		return redirect()->intended(home);
    	}

    	//return to form if login unsucessful
    	return back()->withInput();
    }
}
