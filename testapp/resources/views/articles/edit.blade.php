@extends('app')

@section('content')
<h2>Edit: {{$article->title}}</h2>
<form method="post" action="/articles/{{$article->id}}" enctype="multipart/form-data">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Title:</label>
		<input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}">
	</div>
	<div class="form-group">
		<label for="body">Body:</label>
		<textarea class="form-control" name="body" id="body">{{ $article->body }}</textarea>
	</div>
	<div class="form-group">
		<label for="published_at">Published_on:</label>
		<input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d') }}">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary form-control" name="submit" value="Update Article">
	</div>
</form>
@if($errors->any())
<ul class="alert alert-danger">
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</ul>
@endif
@stop