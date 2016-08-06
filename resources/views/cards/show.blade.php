@extends('layout')

@section('content-variable')
	<h1>{{ $card->title }}</h1>

	<ul>
		@foreach($card->notes as $note)
			<li>{{ $note->body }}</li>
		@endforeach
	</ul>
@stop