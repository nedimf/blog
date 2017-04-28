@extends("blog.master")
<head>
@section ("content")
</head>
<div class="container">
  <h2>Promjeni  ~  ~</h2>
  <form action="/blog/admin/edit/{{$post->id}}" method="post">
   {!! csrf_field() !!}
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" id="title" class="form-control" required value="{{$post->title}}">
    </div>
       <div class="form-group">
      <label>Autor</label>
      <input type="text" name="author" id="author" class="form-control" required value="{{$post->author}}">
    </div>
         <div class="form-group">
      <label>Image</label>
      <input type="text" name="image" id="image" class="form-control" required value="{{$post->image}}">
    </div>
       <div class="form-group">
      <label>Short Content</label>
      <input type="text" name="short_content" id="short_content" class="form-control" required value="{{$post->short_content}}">
    </div>
      <div class="form-group">
  <label for="content">Content:</label>
  <textarea class="form-control" rows="5" name="content" id="content" required value="{{$post->content}}"></textarea>
</div>
    <button type="submit" class="btn btn-default">Pošalji</button>
  </form>
 
 
</div>
@endsection