@extends('layout.app')
@section('content')
	<h2>Drop Your Booking Number Here</h2>
		{!! Form::open(['url' => 'predict/submit']) !!}
    		<div class="form-group">
    			{{Form::label('name', 'Name')}}
    			{{Form::text('name','', ['class' => 'form-control','placeholder' => 'Enter your name'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('number', 'Phone-Number')}}
    			{{Form::number('number','', ['class' => 'form-control','placeholder' => 'Enter your phone number'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('message', 'Booking')}}
    			{{Form::textarea('booking','', ['class' => 'form-control','placeholder' => 'Enter Your Bookin Number Here'])}}
    		</div>
    		<div>
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    		</div><br><br><br><br>
		{!! Form::close() !!}
@endsection
@section('sidebar')
	@parent
	<h1 class="text-black">Make Your Predictions And Get Paid!</h1>
		<h4><p class="text-black">Remember the game should not be more than 6 games and not less than 4 games.<br>And the odd should not be more than 7 odd.<br>GOOD LUCK!.</p></h4>
	<h3 class="btn btn-danger">BET9JA   BOOKING  NUMBER  ONLY!</h3>


@endsection