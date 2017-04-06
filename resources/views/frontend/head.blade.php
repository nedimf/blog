
<html lang="en">
<head>
<!--HTML Bootstrap-->
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
<?php
  
if (isset($greeting)) {

	$date = date("d.m.Y");
	$time = date("H:i:s");
    echo '<center><h1>'.$greeting.'</h1><br>';
    echo '<h2> Danas je: '.$date.'</h2><br>';
    echo '<h2> Trenutno je: '.$time.'</h2></center>';
    echo '<a href ="/pocetna"><--Back</a>';
}else{
 	$greeting = "Početna stranica";
 	echo '<center><h1>'.$greeting.'</h1></center>';
}

?>
      
</div>

</body>
</html>
<!-- -->