<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
    	$title = 'Welcome To PSAC 77000';
    	return view('welcome', compact('title'));
    }

    public function about(){
    	return view('about');
    }

    public function collective(){
    	return view('collective');
    }

    public function unionadv(){
    	return view('unionadv');
    }

    public function resources(){
        return view('resources');
    }

    public function faq(){
    	return view('faq');
    }

    public function contactus(){
    	return view('contactus');
    }

    public function benefits(){
        return view('benefits');
    }

}
