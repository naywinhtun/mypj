@extends('layout')

@section('content')
  
  <h3>All Cards</h3>

  @foreach($cards as $card)  
    <div>
  	<a href="card/{{ $card->id }}">{{ $card->title }}</a>
    </div>
  @endforeach

@endsection

