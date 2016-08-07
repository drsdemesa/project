<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
	// public function store (Request $request)
 //    {
 //    	return $request->all();
 //    }  
 	public function store (Request $request, Card $card)
   	{
   		//option 1
   		// $note = new Note;
   		// $note->body = $request->body;
   		// $card->notes()->save($note);

   		//option 2
   		// $note = new Note(['body' => $request->body]);
   		// $card->notes()->save($note);

   		//option 3
   		// $card->notes()->save(
   		// 	new Note(['body' => $request->body])
   		// );

   		//option 4
   		// $card->notes()->create([
   		// 	'body' => $request->body
   		// ]);

   		//option 5
   		//$card->notes()->create($request->all()); //potentially dangerous as we don't know what are being submitted in the form, but we are protected by the fillable feature in laravel

   		//option 6 
   		$card->addNote(
   			new Note($request->all())
   		);

   		// return \Request::all();
   		//return request()->all();
   		//return \Redirect::to('/some/new/uri');
   		//return redirect()->to('');
   		//return redirect('foo\');

   		return back();

   	}  
}
