<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand">LOGO
        {{-- <img src="{{asset("./Images/beer-logo.jpg")}}" alt="Beer Logo" style="width:80px;" class="rounded">  --}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item mx-5">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" href="{{route('beers')}}">Must Try</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" href="{{route('form')}}">Newbee</a>
            </li>    
            <li class="nav-item mx-5">
                <a class="nav-link" href="#">Beergenda</a>
            </li>    
            <li class="nav-item mx-5">
                <a class="nav-link" href="#">Link</a>
            </li>  
        </ul>
    </div>  
</nav>
<br>
   
  
  