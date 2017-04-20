@extends("cities.master")
@section ("content")
<html>
<head>
 <meta charset="utf-8">
</head>
<body>
<center>
<h1>Ime grada : {{$city->name}}</h1>
<h2>Poštanski broj : {{$city->zip}}</h2>
</center>
</body>
</html>

@endsection