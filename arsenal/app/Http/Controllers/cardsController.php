<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class cardsController extends Controller
{
    public function index()
    {
    	$cards = Card::all();
    	return view('cards.index',compact('cards'));
    }

    public function show(Card $card)
    {
    	// if(Auth::guest()){
    	// 	return redirect('card');
    	// }
    	$card = Card::with('notes.user')->find(1);
    	//return $card;
    	return view('cards.show',compact('card'));
    }
}
