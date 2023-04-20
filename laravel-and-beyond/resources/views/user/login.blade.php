@extends('layouts.layout')
@section('content')
<h1>Log In</h1>
<div class="form-container">
    <div class="register-form">
        <form action="{{route ('login-user')}}" method="POST">
            @csrf
            <div class="form-field">
                <input type="email" class="form-control" placeholder="email" name="email"/>
                @error('email')
                    <span class="danger">{{$message}}</span>
                @enderror
            </div>
        
            <div class="form-field">
                <input type="password" class="form-control" placeholder="password" name="password"/>
                @error('password')
                    <span class="danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-remeber">
                <label for="remember">Remember me</label>
                <input type="checkbox" name="remember" value="1">
            </div>
            <button type="submit" class="form-button">LOGIN</button> 
        </form>
    </div>
</div>
@endsection