@extends('layouts.layout')
@section('content')
<div class="container">
<h1>Hello {{ Auth::user()->name }}</h1>
<h2>You have successfully logged in!</h2>
</div>
@endsection