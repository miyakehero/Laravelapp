<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
	public function index()
	{
		return view('Login.register');
	}
}