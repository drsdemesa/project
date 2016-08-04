<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home() 
    {
    	 return view('welcome');
    }

    public function about(){
		//return "About Us";
		$people = ['Darris', 'Rauve', 'Audrin'];
		return view('pages.about', compact('people'));
		// return view('welcome', ['people' => $people]);
		// return view('pages.about')->with('people', $people);
		// return view('pages.about')->withPeople($people);
		// return View::make(); *
		// return view('welcome', []); //functionally same as *
    }
	
}
