<?php

namespace App\Http\Controllers;
use App\Card;
use App\Note;
use Illuminate\Http\Request;

class notesController extends Controller
{
	public function store(Request $request,Card $card)
	{
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);


		// $card->notes()->save(new Note(['body'=>$request->body]));

		// $card->notes()->create([
		// 	'body'=>$request->body
		// ]);

		//$card->notes()->create($request->all());

        $this->validate($request,[
         'body'=>'required|min:10'
        ]);

        $note = new Note($request->all());
        //$note->by(Auth::user());
		$card->addNote($note,1);

		return back();
    	// return $request()->all();
	}

	public function edit(Note $note)
	{
		return view('notes.edit',compact('note'));
	}

	public function update(Request $request,Note $note)
	{
		$note->update($request->all());
		return back();
	}

}
