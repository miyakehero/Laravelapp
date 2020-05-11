@extends('layouts.loginapp')

@section('login_menu')
  <p>ユーザ名：{{$username}}</p>
  <form action="post" method="post"></form>
    <button type="submit">Logout</button>
@endsection

@section('content')
  <h3>Dashboard</h3>
  <h2>You are logged in</h2>
@endsection