<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	public function notes ()
    {
    	return $this->hasMany(Note::class);
    	//return $this->hasMany('App\Note);
    }   

	public function path ()
 	{
 		return '/cards/' . $this->id;
 	}     

 	public function addNote(Note $note)
 	{
 		return $this->notes()->save($note);
 	}
}
