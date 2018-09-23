@extends('layout.app')
@section('content')
<h1 class="text-black">VIEW SURE GAMES</h1>	
	
	<br><br>
	<hr>
	<h2 class="text-black">Do You Want To Register?</h2><h4><a href="/games">Click Here</a></h4>
	<br><br>
	<h1 class="text-black">Login form</h1><br>	
		<form action="/login" method="Post">
             {{ csrf_field() }}
    		<div class="form-group">
    			<label for="name">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
    		</div>
    		
    		<div class="form-group">
    			<label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your Password">
    		</div>
 
    		<div>
    			<input type="submit" name="submit" class="btn btn-primary">
    		</div><br><br><br><br>
		</form>

@endsection