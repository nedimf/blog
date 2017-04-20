@extends("cities.master")
@section ("content")
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    

<center><h2></h2></center>
<div class="container">
  
    <ul>
      @foreach ($cities as $city)
      
     
  <li class="list-group-item"><a href="/city/{{$city->id}}"><h4>{{$city->name}}</h4> </a></li>
  </center>
      

      @endforeach
    </ul>
</div>

  </body>
</html>

@endsection