@props(['beer'])

<div class="cards">
    <img class="card-img-top" src="{{$beer->image}}" alt="Image of the displayed beer">
    <div class="card-body">
      <h3 class="card-title">{{$beer->name}}</h3>
      <p class="card-text">{{$beer->type}}</p>
      <p class="card-text">{{$beer->country}}</p>
      <p class="card-text">{{$beer->alcohol_percentage}}%</p>
      <p class="card-text">BREWERY: {{$beer->brewery}}</p>
      
      <div class="d-flex justify-content-center align-items-center mt-4" id="button-group">
        <div class=" flex-column h-15 w-40">
          <a href="/beers/{{$beer->slug}}" class="btn btn-outline-dark btn-block shadow">Info</a>
        </div>
      </div>
      

    </div>
  </div>