@extends('layouts.loginapp')

@section('title', 'Login')

@section('content')
<form action = "/login" method = "post">
@csrf
<p> E-Mail Address: <input type="text" name="email" size="10"> </p>
<p> Password: <input type="password" name="pwd" size="10"> </p>
<p> <input type="checkbox" name="Remember" value="1">Remember Me </p>
<p> 
<input type="submit" value="Login">
<a href="">Forgot Your Password?<a>
</p>
</form>
@endsection