@extends('layout.app')
@section('content')
	<h1>Messages</h1>
	@if(count($messages) > 0)
		@foreach($messages as $message)
			<ul class="list-group">
				<li class="list-group-item">Name: {{$message->name}}</li>
				<li class="list-group-item">Phone-Number: {{$message->number}}</li>
				<li class="list-group-item">Messages: {{$message->message}}</li>
				
			</ul>
		@endforeach
	@endif
@endsection

