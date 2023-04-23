@extends('layouts.layout')
@section('content')

<div class="card">
    {{-- <img class="card-img-top" src="{{$beer->image}}" alt="Image of the displayed beer"> --}}
    <div class="card-body mx-4">
      <h1 class="card-title">{{$beer->name}}</h1>
      <p class="card-text">{{$beer->type}}</p>
      <p class="card-text">{{$beer->country}}</p>
      <p class="card-text">{{$beer->alcohol_percentage}}%</p>
      <p class="card-text">BREWERY: {{$beer->brewery}}</p>
      <br>
      <p class="card-text" style="text-align: justify">{{$beer->info}}</p>
      
      <div class="d-flex justify-content-center align-items-center mt-4" id="#button-group">
        <div class=" flex-column h-15 w-40">
        
          <a href={{route('beers')}} class="btn btn-outline-dark btn-block shadow">Back To Tasting</a>
          <a href="/previousbeer/{{$beer->id}}" class="btn btn-outline-dark btn-block shadow">Previous</a>
          
          <a href="/nextbeer/{{$beer->id}}" class="btn btn-outline-dark btn-block shadow">Next</a>
        </div>
      </div>
    </div>
  </div>
@endsection
