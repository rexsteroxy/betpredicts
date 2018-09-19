<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,
    		['name' => 'required',
    		'number' => 'required'
    	]);
    	//creating new message and inserting to the database
    	$message=new message;
    	$message->name = $request->input('name');
    	$message->number = $request->input('number');
    	$message->message = $request->input('message');
    	//saving the message
    	$message->save();
    	//redirecting the controller

    	return redirect('home')->with('success','Message Sent');
    }
    public function getMessages(){
    	$messages = Message::all();
    	return view ('messages')->with('messages',$messages);
    }
    
} 
