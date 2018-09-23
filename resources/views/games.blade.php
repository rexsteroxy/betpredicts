@extends('layout.app')
@section('content')
<h1 class="text-black">VIEW SURE GAMES</h1>	
	<h3><p class="text-black link-nav"><a href="/home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/login">Click to view</a></p></h3>
	<br><br>
	<hr>
	<h2 class="text-black">Already Registered?</h2><h4><a href="/login">Click Here</a></h4>
	<br><br>
	<h1 class="text-black">Registeration form</h1><br>	
		<form action="/register" method="Post">
            {{ csrf_field() }}
    		<div class="form-group">
    			<label for="name">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
    		</div>
    		<div class="form-group">
                <label for="number">Phone-Number:</label>
                <input type="number" name="number" class="form-control" placeholder="Enter your number">
    		</div>
    		<div class="form-group">
                <label for="password">Password:</label>
                <input type="Password" name="password" class="form-control" placeholder="Enter your Password">
            </div>
    		<div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="Password" name="password_confirmation" class="form-control" placeholder="Confirm Your Password">
            </div>
    		<div>
    			<input type="submit" name="submit" class="btn btn-primary">
    		</div><br><br><br><br>


		</form>

@endsection