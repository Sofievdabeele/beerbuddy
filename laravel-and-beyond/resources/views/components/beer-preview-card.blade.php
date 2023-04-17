@props(['beer'])

<div class="card mb-5 mr-4 mx-auto" style="max-width: 450px; max-width: 370px;">
    <img class="card-img-top" src="{{$beer->image}}" alt="Image of the displayed beer">
    <div class="card-body">
      <h5 class="card-title">{{$beer->name}}</h5>
      <p class="card-text">{{$beer->type}}</p>
      <p class="card-text">{{$beer->country}}</p>
      <p class="card-text">{{$beer->alcohol_percentage}}%</p>
      <p class="card-text">BREWERY: {{$beer->brewery}}</p>
      
      <a href="/beers/{{$beer->slug}}" class="btn btn-primary">More info</a>
      <a href="#" class="btn btn-primary">Edit</a>
      <a href="#" class="btn btn-primary">Delete</a>

    </div>
  </div>