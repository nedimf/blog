@extends("blog.master")
<head>
@section ("content")
</head>
<div class="container">
  <h2>Unesi novi ~ Blog Post ~</h2>
  <form action="/blog/admin/new" method="post">
   {!! csrf_field() !!}
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" id="title" class="form-control" required>
    </div>
       <div class="form-group">
      <label>Autor</label>
      <input type="text" name="author" id="author" class="form-control" required>
    </div>
         <div class="form-group">
      <label>Image</label>
      <input type="text" name="image" id="image" class="form-control" required>
    </div>
       <div class="form-group">
      <label>Short Content</label>
      <input type="text" name="short_content" id="short_content" class="form-control" required>
    </div>
      <div class="form-group">
  <label for="content">Content:</label>
  <textarea class="form-control" rows="5" name = "content" id="content"></textarea>
</div>
    <button type="submit" class="btn btn-default">Pošalji</button>
  </form>
 
 
</div>
@endsection