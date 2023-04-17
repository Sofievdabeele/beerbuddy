@extends('layouts.layout')
@section('content')

<h1 class="text-center mx-auto mt-3 mb-5">Beers</h1>
<div class="container d-flex flex-wrap mx-auto w-100" id="card-container">

    @foreach ($beers as $beer)
        <p class="card-text mb-3 mx-3" style="max-width: 300px;">< x-beer-preview-card :beer="$beer" /></p>
    @endforeach
</div>

@endsection