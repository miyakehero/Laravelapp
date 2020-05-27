@extends('layouts.todolist')

@section('list_table')
  <table cellspacing="0" cellpadding="5">
    <tr><th>ID</th><th>コメント</th><th>状態</th></tr>
      @foreach ($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->comment}}</td>
            @if ($item->status == 0)
              <form action= {{ route('todolist.post') }} method = "post">
              @csrf
                <td>
                  <input type="hidden" name="status" value="0"> 
                  <input type="hidden" name="id" value={{$item->id}}>
                  <input type="submit" value = "作業中">
                </td>
              </form>
            @else
              <form action= {{ route('todolist.post') }} method = "post">
              @csrf
                <td>
                  <input type="hidden" name="status" value="1">
                  <input type="hidden" name="id" value={{$item->id}}>
                  <input type="submit" value = "完了">
                </td>
              </form>
            @endif
        <td>
          <form action= {{ route('todolist.post') }} method = "post">
          @csrf
            <td>
              <input type="hidden" name= "delete" value={{$item->id}}>
              <input type="submit" value = "削除">
            </td>
          </form>
        </td>
      @endforeach
  </table>
@endsection

@section('comment')
新規タスクの追加
<form action = {{ route('todolist.post') }} method = "post">
  @csrf
  <p> <input type="text" name="comment" size="20"> <input type="submit" value="追加"></p>
</form>
@endsection