<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
	public function edit (Note $note)
	{
		return view('notes.edit', compact('note'));
	}

	public function update (Request $request, Note $note)
	{
		//dd('hit');
		$note->update($request->all());	//update receives an array containing all the fields to be updated, update([]), dangerous and needs validation before saving
		return back();
	}

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
   		// $card->addNote(
   		// 	new Note($request->all())
   		// );

         $this->validate($request, [
            'body' => 'required'
         ]);
         $note = new Note($request->all());
        // $note->by(1); //Auth::id();
         $note->user_id = 1; 

         $card->addNote($note);

   		//return $request->all();
   		// return \Request::all();
   		//return request()->all();
   		//return \Redirect::to('/some/new/uri');
   		//return redirect()->to('');
   		//return redirect('foo\');

   		return back();

   	}  
}
