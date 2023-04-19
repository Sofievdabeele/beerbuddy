@extends('layouts.layout')
@section('content')
<h1>Log In</h1>
<form action="{{route ('login')}}" method="POST">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" class="form-control" placeholder="email" name="email"/>
        <label class="form-label">Email address</label>
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" class="form-control" placeholder="password" name="password"/>
        <label class="form-label">Password</label>
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

@endsection