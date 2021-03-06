@extends('layout')

@section('content')
<div class="row">

	<div class="col-md-6 col-md-offset-3">

		<h3>{{ $card->title }}</h3> 
		<ul class="list-group">
			@foreach($card->notes as $note)
			<li class="list-group-item">
				{{ $note->body }}

				<a href="#" class="pull-right">{{ $note->user->name }}</a>
			</li>
			@endforeach
		</ul>

		<h3>Add new note</h3>
		<form method="POST" action="/cards/{{$card->id}}/notes">
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
		</form>

		@if(count($errors))
		<ul>
          @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
      </ul>
		@endif

	</div>	
</div>
@endsection

