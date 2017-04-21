@extends("cities.master")
<head>
@section ("content")
</head>
<div class="container">
  <h2>Unesi novi ~ Grad ~</h2>
  <form action="/city/edit/{{$city->id}}" method="post">
   {!! csrf_field() !!}
    <div class="form-group">
      <label>Novo ime grada</label>
      <input type="text" name="name" id="name" class="form-control" required value="{{$city->name}}">
    </div>
    <div class="form-group">
      <label >Novo zip grada</label>
      <input type="text" name="zip" id="zip" class="form-control" required value="{{$city->zip}}">
    <button type="submit" class="btn btn-default">Pošalji</button>
  </form>
</div>
@endsection