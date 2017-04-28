@extends("blog.master_user")
@section ("content")
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

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
                        
                   
                </li>
                </ul><br>
                </div>

      

      @endforeach
    
    <br><br>





</center>
@endif
  </body>
</html>

@endsection

