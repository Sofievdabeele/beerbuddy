@extends('layouts.layout')
@section('content')
<h1>Register</h1>
<form action="{{route ('handle-register')}}" method="POST">
    @csrf
    <div class="form-outline mb-4">
        <input type="name" class="form-control" placeholder="name" name="name"/>
        <label class="form-label">name</label>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-outline mb-4">
        <input type="email" class="form-control" placeholder="email" name="email"/>
        <label class="form-label">Email address</label>
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-outline mb-4">
        <input type="password" class="form-control" placeholder="password" name="password"/>
        <label class="form-label">Password</label>
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-outline mb-4">
        <input type="password" class="form-control" placeholder="confirm password" name="confirm_password"/>
        <label class="form-label">Confirm Password</label>
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-secondary btn-lg btn-block">REGISTER</button> 

@endsection