@extends("blog.master_user")
@section ("content")
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <meta charset="utf-8">
    <title></title>
  </head>


<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <title>NedX</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            
            
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            

body
{
    font-family: 'Open Sans', sans-serif;
}

.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}


            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

<br><br>


    </body>
</html>











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
                        
                    <div class="pull-right">
                    <a href ="/blog/{{$post->id}}"><button class="btn btn-default">Read more</button></a>
                    </div>
                    <br><br>
                      
                    <span class="glyphicon glyphicon-user">
                  </span><a href="#"> {{$post->author}}</a>

                      | <span class="glyphicon glyphicon-calendar">
                      </span>{{$post->updated_at}} |

                      <i class="glyphicon glyphicon-comment">
                     </i> {{App\Comment::count()}} 


                   
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

