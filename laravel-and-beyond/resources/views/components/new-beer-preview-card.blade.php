@props(['newBeer'])

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$newBeer->name}}</h5>
      <p class="card-text">{{$newBeer->type}}</p>
      <p class="card-text">{{$newBeer->country}}</p>
      <p class="card-text">{{$newBeer->alcohol_percentage}}%</p>
      <p class="card-text">BREWERY: {{$newBeer->brewery}}</p>
      
      <a href="/new-beers/{{$newBeer->id}}" class="btn btn-primary">More info</a>
    </div>
  </div>