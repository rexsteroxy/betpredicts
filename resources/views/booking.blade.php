@extends('layout.app')
@section('content')
	<h1>ALL BOOKINGS</h1>
	@if(count($bookings) > 0)
		@foreach($bookings as $booking)
			<ul class="list-group">
				<li class="list-group-item">Name: {{$booking->name}}</li>
				<li class="list-group-item">Phone-Number: {{$booking->number}}</li>
				<li class="list-group-item">Booking: {{$booking->booking}}</li>
				
			</ul>
		@endforeach
	@endif
@endsection

