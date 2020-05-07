@extends('layouts.loginapp')

@section('title', 'Register')

@section('content')
<form action = {{ route('login') }} method = "post">
  @csrf
  <p> Name: <input type="text" name="name" size="10"> </p>
  <p> E-Mail Address: <input type="text" name="email" size="10"> </p>
  <p> Password: <input type="password" name="pwd" size="10"> </p>
  <p> Confirm Password: <input type="password" name="cfm_pwd" size="10"> </p>
  <p> <input type="submit" value="Register"> </p>
</form>
@endsection