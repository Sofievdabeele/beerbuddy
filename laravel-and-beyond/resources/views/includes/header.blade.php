<nav class="navbar navbar-expand-md navbar-dark">
    <a class="navbar-brand">
        <img id="beer-logo" src="{{asset("./Images/beer.png")}}" alt="Beer Logo"> 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Brewery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('beers')}}">BeerTasting</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('create')}}">BeerBuilder</a>
            </li>    
            <li class="nav-item">
                <a class="nav-link" href="{{route('new-beers')}}">BeerBunker</a>
            </li>    
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
            </li>  
        </ul>
    </div>  
</nav>
<br>
   
  
  