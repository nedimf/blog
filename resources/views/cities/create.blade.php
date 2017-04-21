@extends("cities.master")
<head>
@section ("content")
</head>
<div class="container">
  <h2>Unesi novi ~ Grad ~</h2>
  <form action="/city/new" method="post">
   {!! csrf_field() !!}
    <div class="form-group">
      <label>Ime grada</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
      <label >Zip grada</label>
      <input type="text" name="zip" id="zip" class="form-control" required>
    <button type="submit" class="btn btn-default">Pošalji</button>
  </form>
</div>
@endsection