@extends('layouts.layout')
@section('content')

<h1 class="text-center mx-auto mt-3 mb-5">My Beer Collection</h1>
<div class="container d-flex flex-wrap mx-auto w-100 gap-1" id="card-container">
    
    @foreach ($newBeers as $newBeer)
        <x-new-beer-preview-card :newBeer="$newBeer"/>
    @endforeach
</div>

@endsection