@props(['newBeer'])

<div class="cards">
  {{-- <img class="card-img-top" src="#" alt="Image of the displayed beer"> --}}
  <div class="card-body">
    <h3 class="card-title">{{$newBeer->name}}</h3>
    <p class="card-text">{{$newBeer->type}}</p>
    <p class="card-text">{{$newBeer->country}}</p>
    <p class="card-text">{{$newBeer->alcohol_percentage}}%</p>
    <p class="card-text">BREWERY: {{$newBeer->brewery}}</p>
    
    <div class="d-flex justify-content-center align-items-center mt-4" id="button-group">
      <div class=" flex-column h-15 w-40">
      
        <a href="/new-beers/{{$newBeer->id}}" class="btn btn-outline-dark btn-block shadow">Info</a>
        {{-- <a href="{{route('edit-new-beer')}}" class="btn btn-outline-dark btn-block shadow">Edit</a> --}}
        <a href="/new-beer/delete/{{$newBeer->id}}" class="btn btn-outline-dark btn-block shadow">Delete</a>
        <br>
      </div>
    </div>
    

  </div>
</div>
