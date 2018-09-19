<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingsController extends Controller
{
    public function submit_1(Request $request){
    	$this->validate($request,
    		['name' => 'required',
    		'number' => 'required',
    		'booking' => 'required'
    	]);
    	//creating new booking and inserting to the database
    	$booking=new Booking;
    	$booking->name = $request->input('name');
    	$booking->number = $request->input('number');
    	$booking->booking = $request->input('booking');
    	//saving the message
    	$booking->save();
    	//redirecting the controller

    	return redirect('home')->with('success','Booking Sent');
    }
    public function getBooking(){
    	$bookings = Booking::all();
    	return view ('booking')->with('bookings',$bookings);
    }

}