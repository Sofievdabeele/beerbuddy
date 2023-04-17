@props(['beer'])

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$beer->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$beer->name}}</h5>
      <p class="card-text">{{$beer->type}}</p>
      <p class="card-text">{{$beer->country}}</p>
      <p class="card-text">{{$beer->alcohol_percentage}}%</p>
      <p class="card-text">BREWERY: {{$beer->brewery}}</p>
      
      <a href="/beers/{{$beer->slug}}" class="btn btn-primary">More info</a>
    </div>
  </div>