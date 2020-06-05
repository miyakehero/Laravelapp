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
		$todolist = new Todolist;
		$form = $request->all();
		unset($form['_token']);

		/* コメントを設定 */
		$todolist->fill($form)->save();

		return redirect('/todolist');
	}

	public function delete(Request $request)
	{
		/* DBからデータを「削除」 */
		Todolist::where('id', $request->input('id'))->delete();

		return redirect('/todolist');
	}

	public function changeStatus(Request $request)
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

		return redirect('/todolist');
	}
}