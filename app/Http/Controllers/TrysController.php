<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\User;

class TrysController extends Controller
{
    
    public function create(){
    	return view('games');
    }

    public function store(){

    	//validating the form

    	$this->validate( request(),
    		['name' => 'required',
    		'number' => 'required',
    		'password' => 'required|confirmed'
    		

   ]);

// Create and save the user
    $user=User::create(request(['name','number','password']));

//sign them in
    	auth()->login($user);

//redirecting them to the homepage

    	return redirect()->home()->with('success','Registeration Succesful');



}
}



