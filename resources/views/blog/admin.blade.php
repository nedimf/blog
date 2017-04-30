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
  
  
      
     
 @if (App\Post::count() == 0)

<center>
 <h1>Sorry no,post yet on a blog</h1>
<img src="http://neokino.me/wp-content/themes/neokino/css/prijavi.gif" width="300px" height="200px"></img>

 @else


 
<h2></h2>
<div class="container">
  
    <ul>
      @foreach ($posts as $post)
      

  <div class="container">
    <div class="row">

        <div class="col-md-6 col-lg-11">
            <ul class="list-group-item">
                <li class="media">

                    <a class="pull-left" href="/blog/{{$post->id}}">
                        <img src="{{$post->image}}" class="img-responsive" width="400px" height="200px" alt="...">
                    </a>
                     <h2>{{$post->title}}</h2>
                      <h4>{{$post->short_content}}</h4>
                        
                    <div class="pull-right">
                    <a href ="/blog/{{$post->id}}"><button class="btn btn-default">Read more</button></a>
                    </div>
                    <br><br>
                      
                    <span class="glyphicon glyphicon-user">
                  </span><a href="#"> {{$post->author}}</a>

                      | <span class="glyphicon glyphicon-calendar">
                      </span>{{$post->updated_at}} |

                     


                   
                </li>
                </ul><br>
              
      

     
    
    

    
    




</center>

                <br>
  <!--Button -->
  <div class ="pull-right">
  <a href="/blog/admin/edit/{{$post->id}}"><button class="btn btn-success">Edit</button></a>
  <a href="/blog/admin/delete/{{$post->id}}"><button class="btn btn-danger">Destroy</button></a></div>
 <br><br>
<br>
    

      @endforeach
      </ul>  
      @endif
    </ul>
    <br><br>
    <center><h5>Nedim &copy {{date('Y')}}</h5></center>


</center>

  </body>
</html>

@endsection

