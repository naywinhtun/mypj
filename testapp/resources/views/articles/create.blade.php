@extends('app')

@section('content')

<h1>Create a new Article</h1>
<form method="post" action="/articles" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Title:</label>
		<input type="text" class="form-control" name="title" id="title">
	</div>
	<div class="form-group">
		<label for="body">Body:</label>
		<textarea class="form-control" name="body" id="body"></textarea>
	</div>
	<div class="form-group">
		<label for="published_at">Published_on:</label>
		<input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d') }}">
	</div>
	<div class="form-group">
		<label for="tag">Tags:</label>
		<select class="form-control" name="tags" multiple="multiple" id="tags"></select>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary form-control" name="submit" value="Add Article">
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