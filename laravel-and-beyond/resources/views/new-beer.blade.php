@extends('layouts.layout')
@section('content')

<div class="card">
    {{-- <img class="card-img-top" src="{{$newBeer->image}}" alt="Image of the displayed beer"> --}}
    <div class="card-body">
      <h1 class="card-title">{{$newBeer->name}}</h1>
      <p class="card-text">{{$newBeer->type}}</p>
      <p class="card-text">{{$newBeer->country}}</p>
      <p class="card-text">{{$newBeer->alcohol_percentage}}%</p>
      <p class="card-text">BREWERY: {{$newBeer->brewery}}</p>
      <br>
      <p class="card-text" style="text-align: justify">{{$newBeer->info}}</p>
      
      <div class="d-flex justify-content-center align-items-center mt-4" id="#button-group">
        <div class=" flex-column h-15 w-40">
          <a href="{{route('new-beers')}}" class="btn btn-outline-dark btn-block shadow">Back To Bunker</a>
          <a href="/previousnewbeer/{{$newBeer->id}}" class="btn btn-outline-dark btn-block shadow">Previous</a>
          <a href="/nextnewbeer/{{$newBeer->id}}" class="btn btn-outline-dark btn-block shadow">Next</a>
          <a href="/new-beer/edit/{{$newBeer->id}}" class="btn btn-outline-dark btn-block shadow">Edit</a>
        </div>
      </div>
    </div>
  </div>
@endsection

