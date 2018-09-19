@extends('layout.app')
@section('content')
<h1 class="text-black">VIEW SURE GAMES</h1>	
	
	<br><br>
	<hr>
	<h2 class="text-black">Click Here To Register?</h2><h4><a href="/games">Click Here</a></h4>
	<br><br>
	<h1 class="text-black">Login form</h1><br>	
		{!! Form::open(['url' => 'login/submit']) !!}
    		<div class="form-group">
    			{{Form::label('name', 'Name')}}
    			{{Form::text('name','', ['class' => 'form-control','placeholder' => 'Enter your name'])}}
    		</div>
    		
    		<div class="form-group">
    			{{Form::label('password', 'Password')}}
    			{{Form::text('password','', ['class' => 'form-control','placeholder' => 'Enter Your Password'])}}
    		</div>

    		<div>
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    		</div><br><br><br><br>
		{!! Form::close() !!}

@endsection