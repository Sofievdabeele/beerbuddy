@extends('layouts.layout')
@section('content')

<div class="container">
    <h1>Beers</h1>

    @foreach ($beers as $beer)
        <p class="card-text">< x-beer-preview-card :beer="$beer" /></p>
    @endforeach
</div>

@endsection