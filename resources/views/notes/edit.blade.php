@extends('layout')

@section('content-variable')
	<h1>Edit the Note</h1>
	<form method="POST" action="/notes/{{ $note->id }}">
		{{ method_field('PATCH') }}
		<div class="form-group">
			<textarea class="form-control" name="body" id="" cols="30" rows="10">{{ $note->body }}</textarea>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Note</button>
		</div>
	</form>
@stop