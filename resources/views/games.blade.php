@extends('layout.app')
@section('content')
<h1 class="text-black">VIEW SURE GAMES</h1>	
	<h3><p class="text-black link-nav"><a href="/home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/login">Click to view</a></p></h3>
	<br><br>
	<hr>
	<h2 class="text-black">Already Registered?</h2><h4><a href="/login">Click Here</a></h4>
	<br><br>
	<h1 class="text-black">Registeration form</h1><br>	
		{!! Form::open(['url' => 'games/submit']) !!}
    		<div class="form-group">
    			{{Form::label('name', 'Name')}}
    			{{Form::text('name','', ['class' => 'form-control','placeholder' => 'Enter your name'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('number', 'Phone-Number')}}
    			{{Form::number('number','', ['class' => 'form-control','placeholder' => 'Enter your phone number'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('password', 'Password')}}
    			{{Form::text('password','', ['class' => 'form-control','placeholder' => 'Enter Your Password'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('password_2', 'Retype Password')}}
    			{{Form::text('password_2','', ['class' => 'form-control','placeholder' => 'Retype Your Password'])}}
    		</div>
    		<div>
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    		</div><br><br><br><br>
		{!! Form::close() !!}

@endsection