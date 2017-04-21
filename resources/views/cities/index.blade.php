@extends("cities.master")
@section ("content")
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  
 <center><h2>Create City</h2>

  <a href="city/new/"><button class="btn btn-warning">New city</button>
</center>
<h2></h2>
<div class="container">
  
    <ul>
      @foreach ($cities as $city)
      
     
  <li class="list-group-item"><a href="/city/{{$city->id}}"><h4>{{$city->name}}</h4>  
  <!--Button -->
  <a href="/city/edit/{{$city->id}}"><button class="btn btn-success">Edit</button>
  <a href="city/delete/{{$city->id}}"><button class="btn btn-danger">Delete</button>
 
  </center>
      

      @endforeach
    </ul>
</div>
</center>

  </body>
</html>

@endsection