@extends("blog.master_user")
@section ("content")
<html>
<head>
 <meta charset="utf-8">
</head>
<body>

<div class=" col-md-12 text-left">
  <div class="panel panel-primary">
      <div class="panel-heading"><h3>{{$blog->title}}
       </h3><h4> Autor: {{$blog->author}}</h4></div>
      <div class="panel-body"><center><img src = "{{$blog->image}}"  height="class ="img-circle"  ></div></center>
      <div class="panel-body"><p>{{$blog->content}}</p></div>
      
      <br>
    </div>
    <br>
 <a href = "/blog"><button class="btn btn-info"><--Back</button>
 <br><br>
 <footer>
 <center>
 <h4>Nedim &copy {{date('Y')}}</h4>
</div>

<h2></h2>
</center>
</body>
</html>

@endsection