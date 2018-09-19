@extends('layout.app')
@section('content')
	<h1>Contact</h1>
		{!! Form::open(['url' => 'contact/submit']) !!}
    		<div class="form-group">
    			{{Form::label('name', 'Name')}}
    			{{Form::text('name','', ['class' => 'form-control','placeholder' => 'Enter your name'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('number', 'Phone-Number')}}
    			{{Form::number('number','', ['class' => 'form-control','placeholder' => 'Enter your phone number'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('message', 'Complain')}}
    			{{Form::textarea('message','', ['class' => 'form-control','placeholder' => 'Enter Your Complain'])}}
    		</div>
    		<div>
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    		</div><br><br><br><br>
		{!! Form::close() !!}
@endsection

@section('sidebar')
	@parent
	<div class="contact-details">
                                    <h5>Imo State, Owerri</h5>
                                    <p>
                                        Number 23 Tetlow by Christ Church
                                    </p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>+2349037096290</h5>
                                    <h5>+2348146215321</h5>
                                    <p>Mon to Fri 9am to 6 pm</p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>rexsteroxy22@gmail.com</h5>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>                                                      
                        </div>


@endsection