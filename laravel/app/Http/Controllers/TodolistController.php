<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todolist;
use App\Http\Requests\TodolistRequest;

class TodolistController extends Controller
{
	public function index()
	{
		$items = Todolist::all();
		return view('Todolist.index', compact("items"));
	}

	public function post(TodolistRequest $request)
	{
		/* コメントをDBに登録 */
		if ( $request->has('comment') ) 
		{
			$todolist = new Todolist;
			$form = $request->all();
			unset($form['_token']);
			$todolist->fill($form)->save();
			
			return redirect('/todolist');
		}
	}
}