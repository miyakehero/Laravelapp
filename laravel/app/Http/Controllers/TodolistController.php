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
		}

		/* 「作業中」、「完了」状態を切り替え */
		if ( $request->has('status') ) 
		{
			$status = $request->input('status');

			if($status === "0")
			{
				Todolist::find($request->input('id'))->update(['status' => '1']);
			}
			else if($status === "1")
			{
				Todolist::find($request->input('id'))->update(['status' => '0']);
			}
			else
			{
				/* Do Nothing */
			}
		}

		/* DBからデータを「削除」 */
		if ( $request->has('delete') ) 
		{
			Todolist::find($request->input('delete'))->delete();
		}
		return redirect('/todolist');
	}
}