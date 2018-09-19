@extends('layout.app')
@section('content')
	<h1  class="text-black">Drop Your Sure Predicted Games Here And Get Your Reward.</h1>
		<h3><p class="text-black">
			Kaka prediction game is a medium whereby you can drop 
			any game you think will scale out green.<br><br>
			And a medium whereby you can get sure games to play for free.
		</p></h3>
		<a href="#" class="btn btn-primary">Get Started</a><br><br><br><br>


@endsection

@section('sidebar')
@parent
	<h3 class="text-black">Do you know you stand a chance to win cash if 
		you submit three successive correct games.<br>
		Are you interested?<br>
		<a href="/predict" class="btn btn-success">Click Here</a>
	</h3>

@endsection
