@extends("blog.master_user")
@section ("content")
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

 
 
<h2></h2>
<div class="container">
  
    <ul>
      @foreach ($blogs as $blog)
      
     
  <li class="list-group-item"><a href="/blog/{{$blog->id}}"><h3>{{$blog->title}}</h3><h4>Autor: {{$blog->author}}</h4>
 
  </center>
      

      @endforeach
    </ul>
    <br><br>
</div>
</center>

  </body>
</html>

@endsection

