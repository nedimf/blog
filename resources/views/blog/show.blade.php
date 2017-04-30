@extends("blog.master_user")
@section ("content")
<html>
<head>
 <meta charset="utf-8">
</head>
<body>
 
<div class=" col-md-12 text-left">
  <div class="panel panel-default">
      <div class="panel-heading"><h1>{{$post->title}}
       </h1>
      </div>
      </center>
      <div class="panel-body">
       <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Blog Post -->
                <!-- Title -->
                <h1>{{$post->title}}</h1>
                <!-- Author -->
                <p class="lead"><span class="glyphicon glyphicon-user"></span> {{$post->author}}</p>
                <hr>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Updated at {{$post->updated_at}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive img-thumbnail" src="{{$post->image}}" alt="{{$post->title}}">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$post->content}}</p>

                <hr>
                </div></div></div></div></div>


 
        

      
      
      <br>
    <a href ="/blog"><p>More posts<p></a>


     @if (App\Comment::count() == 0)
<center>
 <h1>Discussion? Start one!</h1>
<img src="http://neokino.me/wp-content/themes/neokino/css/komentari.gif" width="40px" height="40px"></img></center>

    @else



    <h2>Comments:</h2>
    @foreach ($comy as $comment)
    
  <!-- <ul class="list-group">

    <li class="list-group-item"><h4><b>{{$comment->author}} :</b></h4><p>{{$comment->content}}</li>
   </ul>-->
   
   <div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-10">
<div class="panel panel-default">
<div class="panel-heading">
<strong>{{$comment->author}}</strong>
</div>
<div class="panel-body">
{{$comment->content}}
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
</div>
   
   @endforeach
@endif


 <!-- Page Content -->


   
   

<hr>

 <!--Comment-->
   
   <form action="/blog/comment/new" method="post">

   {!! csrf_field() !!}

   <input type="hidden" name="post_id" id="post_id" class="form-control" value="{{$post->id}}" required>
   
   @if(Auth::guest())
  
  <center>
  <h2>Pleas login so you can join disscussion</h2>
   <a href="/login"><h4>Login</h4></a>
   </center>
   @else

   <input type="hidden" name="author" id="author" class="form-control" value="{{Auth::user()->name}}" required>

   <div class="form-group">

      <!--<label>Author</label>
      <input type="text" name="author" id="author" class="form-control" required>
    </div>-->
  <div class="form-group">
  <label for="content">Comment:</label>
  <textarea class="form-control" rows="5" name = "content" id="content"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Pošalji</button>
  </form>
  @endif

    </div>
    <br>



   

 
 <a href = "/blog"><button class="btn btn-info"><--Back</button>
 <br><br>
 <footer>
 <center>
 <h4>Nedim &copy {{date('Y')}}</h4>
</div></center>
</footer>
</a></form></div>

<h2></h2>
</center>
</body>

</html>

@endsection