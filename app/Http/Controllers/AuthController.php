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
}
