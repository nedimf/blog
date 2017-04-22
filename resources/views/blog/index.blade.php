@extends("blog.master")
@section ("content")
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<center>
 <a href="blog/new/"><button class="btn btn-danger">Create Blog</button></center>
 
<h2></h2>
<div class="container">
  
    <ul>
      @foreach ($blogs as $blog)
      
     
  <li class="list-group-item"><a href="/blog/{{$blog->id}}"><h3>{{$blog->title}}</h3><h4>{{$blog->short_content}}</h4>
  <!--Button -->
  <a href="blog/edit/{{$blog->id}}"><button class="btn btn-success">Edit</button>
  <a href="blog/delete/{{$blog->id}}"><button class="btn btn-danger">Destroy</button>
 
  </center>
      

      @endforeach
    </ul>
</div>
</center>

  </body>
</html>

@endsection

