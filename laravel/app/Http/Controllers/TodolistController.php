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

		/* person_idを設定 */
		$current_person = Todolist::orderBy('person_id', 'desc')->first();

		if ( $current_person !== null)
		{
			$todolist->person_id = $current_person->person_id + 1;
		}
		else
		{
			$todolist->person_id = 0;
		}

		/* コメントを設定 */
		$todolist->fill($form)->save();

		return redirect('/todolist');
	}

	public function delete(Request $request)
	{
		$set_person_id = 1;

		/* DBからデータを「削除」 */
		Todolist::where('person_id', $request->input('person_id'))->delete();

		foreach(Todolist::all() as $person)
		{
			$person->person_id = $set_person_id;
			$set_person_id++;
			$person->save();
		}

		return redirect('/todolist');
	}
}