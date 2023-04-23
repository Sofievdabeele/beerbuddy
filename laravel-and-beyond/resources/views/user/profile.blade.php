@extends('layouts.layout')
@section('content')
<div class="container">
<h1>Hello {{ Auth::user()->name }}</h1>
<h2>You are logged in!</h2>
<div class="profile-links">
    <a class="profile-link" href="{{route('create')}}"><img src="{{asset("./Images/beerpump.png")}}" alt="beer pump">Add a new beer</a>
    <a class="profile-link" href="{{route('new-beers')}}"><img src="{{asset("./Images/woodenbeer.png")}}" alt="beer barrel">Look at your beer collection</a>
</div>
</div>
@endsection