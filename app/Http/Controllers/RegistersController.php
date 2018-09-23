<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegistersController extends Controller
{
    public function create(){
    	return view('games');
    }

    public function store(Request $request){
    	$this->validate($request,
    		['name' => 'required',
    		'number' => 'required',
    		'password' => 'required|confirmed'
    	]);
    	//creating new register and inserting to the database
    	$register=new register;
    	$register->name = $request->input('name');
    	$register->number = $request->input('number');
    	$register->password = $request->input('password');
    	$register->confirm_password = $request->input('password_confirmation');
    	//saving the register
    	$user=$register->save();

    	//signing them in

    	//auth()->login($user);
    	//redirecting the controller

    	return redirect('/')->with('success','Registeration Succesful');
    }

    public function getMessages(){
    	$messages = Message::all();
    	return view ('messages')->with('messages',$messages);














/*    	//validating the form

    	$this->validate( request(),
    		['name' => 'required',
    		'number' => 'required',
    		'password' => 'required|confirmed'
    		

   ]);

// Create and save the user
    $user=Register::create(request(['name','number','password']));

//sign them in
    	auth()->login($user);

//redirecting them to the homepage

    	return redirect()->home();*/



}
}

