@extends('layouts.layout')
@section('content')

 <?php $beers = [1, 2] ?>
<div class="container">
    <h1>Beers</h1>

    @foreach ($beers as $beer)
        <p class="card-text">< x-beer-preview-card :beer="$beer" /></p>
    @endforeach
</div>

@endsection