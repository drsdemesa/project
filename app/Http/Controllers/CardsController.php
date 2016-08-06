<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
// use DB;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
    	// $cards = DB::table('cards')->get();
    	$cards = Card::all();
    	return view('cards.index', compact('cards'));
    }

    // public function show($id)
    // {
    // 	$card = Card::find($id);
    // 	//return $card; //if returned directly from controller, laravel automatically builds json data for you, appealling for creating API
    // 	return view('cards.show', compact('card'));
    // }

    public function show(Card $card){ //wildcard on routes.php calling this function must match the parameter of this function
    	return view('cards.show', compact('card'));
    }
}
