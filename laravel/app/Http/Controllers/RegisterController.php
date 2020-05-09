<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HomeRequest;

class RegisterController extends Controller
{
	public function index()
	{
		return view('Login.register');
	}
	public function post(HomeRequest $request)
	{
		return view('Login.home', ['msg' => $request->name]); 
	}
}