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
 <a href="/blog/admin/new/"><button class="btn btn-danger">Create Post <img src="http://neokino.me/wp-content/themes/neokino/css/komentari.gif" width="30px" height="30px"></img>

 </button>
 <a href="/blog/admin/comment/"><button class="btn btn-info">Comment Area  <img src="http://neokino.net/wp-content/themes/neokino/css/prijavi.gif" width="30px" height="30px"></img>
</button>

<!--Logout-->
 <a href="{{ route('logout') }}"
  onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  <button class="btn btn-warning btn-lg">Logout</button>
 </a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 {{ csrf_field() }}
</form>
<!--End logout-->
</center>
 
<h2></h2>
<div class="container">
  
    <ul>
      @foreach ($posts as $post)
      
     <div class="container">
    <div class="row">

        <div class="col-md-6 col-lg-11">
            <ul class="list-group-item">
                <li class="media">

                    <a class="pull-left" href="{{$post->id}}">
                        <img src="{{$post->image}}" class="img-responsive" width="400px" height="200px" alt="...">
                    </a>
                     <h2>{{$post->title}}</h2>
                      <h4>{{$post->short_content}}</h4>
                        
                   
                </li>
                </ul>
                <br>
  <!--Button -->
  <div class ="pull-right">
  <a href="/blog/admin/edit/{{$post->id}}"><button class="btn btn-success">Edit</button></a>
  <a href="/blog/admin/delete/{{$post->id}}"><button class="btn btn-danger">Destroy</button></a></div>
 <br><br>
</div><br>
      

      @endforeach
    </ul>
    <br><br>
    <center><h5>Nedim &copy {{date('Y')}}</h5></center>
</div>
</center>

  </body>
</html>

@endsection

