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
 <a href="/blog/admin/new/"><button class="btn btn-danger">Create Blog</button>
<!--Logout-->
 <a href="{{ route('logout') }}"
  onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  <button class="btn btn-warning">Logout</button>
 </a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 {{ csrf_field() }}
</form>
<!--End logout-->
</center>
 
<h2></h2>
<div class="container">
  
    <ul>
      @foreach ($blogs as $blog)
      
     
  <li class="list-group-item"><a href="/blog/{{$blog->id}}"><h3>{{$blog->title}}</h3><h4>Author: {{$blog->author}}</h4>
  <!--Button -->
  <a href="/blog/admin/edit/{{$blog->id}}"><button class="btn btn-success">Edit</button>
  <a href="/blog/admin/delete/{{$blog->id}}"><button class="btn btn-danger">Destroy</button>
 
  </center>
      

      @endforeach
    </ul>
    <br><br>
    <center><h5>Nedim &copy {{date('Y')}}</h5></center>
</div>
</center>

  </body>
</html>

@endsection

