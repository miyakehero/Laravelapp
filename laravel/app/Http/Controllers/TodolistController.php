<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todolist;

class TodolistController extends Controller
{
	public function index()
	{
		$items = Todolist::all();
		return view('Todolist.index', ['items' => $items]);
	}

	public function post(Request $request)
	{
		/* コメントをDBに登録 */
		if ( $request->has('comment') ) 
		{
			$this->validate($request, Todolist::$rules);
			$todolist = new Todolist;
			$form = $request->all();
			unset($form['_token']);
			$todolist->fill($form)->save();
			
			return redirect('/todolist');
		}
	}
} 