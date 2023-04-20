{{-- <nav class="navbar navbar-expand-md navbar-dark">
    <a class="navbar-brand">
        {{-- <img id="beer-logo" src="{{asset("./Images/beer.png")}}" alt="Beer Logo">  --}}
    {{-- </a>
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
</nav> --}}

   
<nav>
    <div class="nav">
        <a class="home-logo" href="{{route('home')}}">
            <img class="logo" src="{{asset("./Images/beer.png")}}" alt="Beer Logo"> 
        </a>
    <ul>
        @guest
            <li><a href="{{route('home')}}">Brewery</a></li>
            <li><a href="{{route('beers')}}">BeerTasting</a></li>
            <li><a class=" {{ (request()->is('login')) ? 'active' : '' }}" href="{{route('login')}}">Login</a></li>
            <li><a class="{{ (request()->is('register')) ? 'active' : '' }}" href="{{route('register')}}">Register</a></li>
            @else 
            <li><a href="{{route('home')}}">Brewery</a></li>
            <li><a href="{{route('beers')}}">BeerTasting</a></li>
            <li><a href="{{route('create')}}">BeerBuilder</a></li>
            <li><a href="{{route('new-beers')}}">BeerBunker</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">User settings</li>
                    <li class="dropdown-item">Upgrade</li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    >Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
                </ul>
            </li>   
        @endguest
    </ul>
    
    <button class="burgermenu" type="button">
        <img class="burger" src="{{asset("./Images/conveyor.png")}}" alt="menu">
      </button>
</div>
</nav>

