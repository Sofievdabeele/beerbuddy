@extends('layouts.layout')
@section('content')
<h1>Form</h1>
<form action="{{route('store')}}" method="POST">
  @csrf
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="name" placeholder="Enter beer name" name="name">
      </div>
      <div class="col">
        <input type="text" class="form-control" id="type" placeholder="Type of beer" name="type">
      </div>
    </div> 
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
      </div>
      <div class="col">
        <input type="text" class="form-control" id="alcohol" placeholder="Enter alcohol percentage" name="alcohol">
      </div>
    </div> 
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="brewery" placeholder="Enter brewery" name="brewery">
      </div>
      <div class="col">
        <input type="text" class="form-control" id="info" placeholder="More info" name="info">
      </div>
    </div> 
    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

</form>

@endsection