@extends('layouts.login-header')
@section('content')
<div class="login">
<img src="/images/login-icon.png" class="login-icon">
<form>
	<p>Login</p>
	<input type="text" name="" placeholder=" ">
	<p>Password</p>
	<input type="password" name="" placeholder=" "><br><br><br>
	<input type="submit" name="" value="Sign in">
	<a href="{{route('registration')}}">New customer? Start here.</a>
</form>
</div>
@endsection