@props(['beer'])

<h2>{{$beer->name}}</h2>
<p>{{$beer->type}}</p>
<p>{{$beer->country}}</p>
<p>{{$beer->alcohol_percentage}}%</p>
<p>BREWERY: {{$beer->brewery}}
</p>
<p>More info: 
    <br>
    {{$beer->info}}
</p>
