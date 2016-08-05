@extends('layout')

@section('header-section')
    About Us
@stop


@section('content-variable')

        <div class="container">
            <div class="content">
                <div class="title">About Page Here</div>
                @unless (empty($people)) 
                    There are some people.
                @else 
                    There is no one here.
                @endunless

                <?php foreach ($people as $person) : ?>
                    <li><?= $person; ?></li>
                <?php endforeach; ?>

                @foreach ($people as $person)
                    <li>{{ $person }}</li>
                @endforeach
            </div>
        </div>
@stop