@extends('layouts.layout')
@section('content')


<div class="container">
    <h1>New Beers</h1>

    @foreach ($newBeers as $newBeer)
        {{-- <p class="card-text">< x-beer-preview-card :beer="$beer" /></p> --}}
    @endforeach
</div>

@endsection