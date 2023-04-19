@extends('layouts.layout')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit New Beer</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('home') }}">
                        Home</a>
                </div>
            </div>
        </div>
        @if(session('status'))
          <div class="alert alert-success mb-1 mt-1">
              {{ session('status') }}
          </div>
        @endif
   
        <form action="/new-beer/update/{{$newBeer->id}}" method="POST">
            @csrf
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" id="name" placeholder="Enter beer name" name="name" value="{{$newBeer->name}}">
                        @error('name')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" id="type" placeholder="Type of beer" name="type" value="{{$newBeer->type}}">
                        @error('type')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div> 
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" value="{{$newBeer->country}}">
                      @error('country')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" id="alcohol" placeholder="Enter alcohol percentage" name="alcohol_percentage" value="{{old('alcohol_percentage')}}">
                        @error('alcohol_percentage')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div> 
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" id="brewery" placeholder="Enter brewery" name="brewery" value="{{old('brewery')}}">
                        @error('brewery')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" id="info" placeholder="More info" name="info" value="{{old('info')}}">
                        @error('info')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div> 
              
                  <button type="submit" class="btn btn-secondary btn-lg btn-block">Save Changes</button>
              
              </form>
@endsection