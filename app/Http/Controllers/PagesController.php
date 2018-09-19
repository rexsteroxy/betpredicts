<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
    	return view('home');
    }
    public function getContact(){
    	return view('contact');
    }
    public function getAbout(){
    	return view('about');
    }
    public function getService(){
    	return view('service');
    }
    public function getPredict(){
        return view('predict');
    }
    public function getGames(){
        return view('games');
    }
    public function getLogin(){
        return view('login');
    }
}
