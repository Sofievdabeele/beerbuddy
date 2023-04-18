@extends('layouts.layout')
@section('content')

<h1 class="text-center mx-auto mt-3 mb-5">Beers</h1>
<div class="container d-flex flex-wrap mx-auto w-100 gap-1" id="card-container">

    @foreach ($beers as $beer)
        <x-beer-preview-card :beer="$beer"/>
    @endforeach
</div>

@endsection