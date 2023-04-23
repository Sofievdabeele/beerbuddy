@extends('layouts.layout')
@section('content')

<h1>My Beer Collection</h1>
<div class="card-container">
    
    @foreach ($newBeers as $newBeer)
        <x-new-beer-preview-card :newBeer="$newBeer"/>
    @endforeach
</div>

@endsection