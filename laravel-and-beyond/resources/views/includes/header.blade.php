 {{-- <nav>
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
</nav> --}}

<div class="container-nav"> 
    <nav class="navbar">
        <a href="{{route('home')}}" class="nav-branding">
            <img class="logo" src="{{asset("./Images/beer.png")}}" alt="Beer Logo"> 
        </a>
         <ul class="nav-menu">
            @guest
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Brewery </a></li>
                <li class="nav-item"><a href="{{route('beers')}}" class="nav-link">Tasting</a></li>
                <li><a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{route('login')}}">Login</a></li>
                <li><a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{route('register')}}">Register</a></li>
            @else 
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Brewery</a></li>
                <li class="nav-item"><a href="{{route('beers')}}" class="nav-link">Tasting</a></li>
                <li class="nav-item"><a href="{{route('create')}}" class="nav-link">Builder</a></li>
                <li class="nav-item"><a href="{{route('new-beers')}}" class="nav-link">Bunker</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">User settings</li>
                        <li class="dropdown-item">Upgrade</li>
                        <li><a class="dropdown-item" id="dropdown" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').mouseover();"
                                >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            </form>
                        </li>
                    </ul>
                </li>   
            @endguest
         </ul>
         <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
           
         </div>

    </nav>
 </div>