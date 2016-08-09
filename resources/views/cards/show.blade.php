@extends('layout')

@section('content-variable')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<h1>{{ $card->title }}</h1>

			<ul class="list-group">
				@foreach($card->notes as $note)
					<li class="list-group-item">
						{{ $note->body }} 
						<a href="#" class="pull-right">{{ $note->user->username }}</a>
						<a href="/notes/{{ $note->id }}/edit"><span class="glyphicon glyphicon-pencil"></span></a>
					</li>
				@endforeach
			</ul>

			<hr>

			<h3>Add a New Note</h3>

			<form method="POST" action="/cards/{{ $card->id }}/notes">
				<div class="form-group">
					<textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
					{{ csrf_field() }}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Note</button>
					<button type="submit" class="btn btn-primary">Back</button>
				</div>
			</form>

			@if(count($errors))
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div>
@stop