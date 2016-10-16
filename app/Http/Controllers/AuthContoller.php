k<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthContoller extends Controller
{
	//just return login view
    public function login()
    {
    	return view('auth.login');
    }
}
