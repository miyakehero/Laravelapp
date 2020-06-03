@extends('layouts.todolist')

@section('list_table')
  <table cellspacing="0" cellpadding="5">
    <tr><th>ID</th><th>コメント</th><th>状態</th></tr>
      @foreach ($items as $item)
        <tr>
          <td>{{$item->person_id}}</td>
          <td>{{$item->comment}}</td>
          <td><input type="submit" value = "作業中"> </td>
          <td>
            <form action= {{ route('todolist.delete') }} method = "post">
            @csrf
            <td>
              <input type="hidden" name="person_id" value={{$item->person_id}}>
              <input type="submit" value = "削除">
             </td>
           </form>
          </td>
        </tr>
      @endforeach
  </table>
<p>新規タスクの追加</p>
<form action = {{ route('todolist.post') }} method = "post">
  @csrf
  <p> <input type="text" name="comment" size="20"> <input type="submit" value="追加"></p>
</form>
@endsection 