@extends('layouts.layout')
@section('content')
<h1>Form</h1>
<form action="{{route('store')}}" method="POST">
  @csrf
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="name" placeholder="Enter beer name" name="name" value="{{old('name')}}">
          @error('name')
            <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col">
        <input type="text" class="form-control" id="type" placeholder="Type of beer" name="type" value="{{old('type')}}">
          @error('type')
            <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
    </div> 
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" value="{{old('country')}}">
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

    <button type="submit" class="btn btn-secondary btn-lg btn-block">Enter a new beer</button>

</form>

@endsection