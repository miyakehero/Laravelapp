<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
	public function index()
	{
		return view('Login.index');
	}
	
	public function post()
	{
		return view('Login.index');
	}
}
