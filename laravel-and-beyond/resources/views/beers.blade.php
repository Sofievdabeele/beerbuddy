@extends('layouts.layout')
@section('content')

<h1>Beers</h1>
<div class="card-container">

    @foreach ($beers as $beer)
        <x-beer-preview-card :beer="$beer"/>
    @endforeach
</div>

@endsection