@extends('layouts.layout')
@section('content')
<h1>Register</h1>
<div class="form-container">
    <div class="register-form">
        <form action="{{route ('handle-register')}}" method="POST">
            @csrf
            <div class="form-field">
                <input type="name" class="form-control" placeholder="name" name="name"/>
                @error('name')
                    <span class="danger">{{$message}}</span>
                @enderror
            </div>

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
    
            <div class="form-field">
                <input type="password" class="form-control" placeholder="confirm password" name="password_confirmation"/>
                @error('password')
                    <span class="danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-remeber">
                <label for="remember">Remember me</label>
                <input type="checkbox" name="remember" value="1">
            </div>
            
            <button type="submit" class="form-button">REGISTER</button> 
    
        </form>
    </div>
</div>
@endsection