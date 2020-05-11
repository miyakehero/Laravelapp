@extends('layouts.loginapp')

@section('title', 'Register')

@section('login_menu')
  <a href={{ route('login.index') }}> login <a>
  <a href={{ route('register.index') }}> register <a>
@endsection

@section('content')
@if (count($errors) > 0)
  <p>入力に問題があります。</p>
@endif
<form action = {{ route('home.post') }} method = "post">
  @csrf
  @error('name')
    <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
  @enderror
  <p> Name: <input type="text" name="name" value="{{old('name')}}" size="10"> </p>
  @error('email')
    <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
  @enderror
  <p> E-Mail Address: <input type="text" name="email" value="{{old('email')}}" size="10"> </p>
  @error('pwd')
    <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
  @enderror
  <p> Password: <input type="password" name="pwd" size="10"> </p>
  @error('cfm_pwd')
    <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
  @enderror
  <p> Confirm Password: <input type="password" name="pwd_confirmation" size="10"> </p>
  <p> <input type="submit" value="Register"> </p>
</form>
@endsection