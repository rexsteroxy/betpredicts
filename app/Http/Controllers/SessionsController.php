<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{

public function __construct(){
	$this->middleware('guest',['except' => 'destroy']);

}
 
    public function create(){
    	return view('login');
    }

    public function store(){
//Authenticating the user

if (! auth()->attempt( request(['name', 'password']))){
//if not redirect them back

	return back()->withErrors(['message'=>'please check your credentials and try again']);
}


    	//if so sign them in
//redirecting to the homepage

return redirect()->home();


    }

    public function destroy(){
//logout the user
    	auth()->logout();

//redirecting to the homepage

return redirect()->home();

    }
}
