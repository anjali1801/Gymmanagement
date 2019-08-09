<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="gymmanagement";
	$dberror1="couldnt connect to DB";
	mysql_connect($host,$user,$password) or die($dberro1);
	mysql_select_db($db);
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          
        </nav>
        <h3 class="text-muted">GYM MANAGEMENT SYSTEM</h3>
      </div>

      <div class="jumbotron">
        <h1>THE SQUARE BALL</h1>
        <p class="lead">BE FIT BE LIVELY. BE A FITNESS FREAK </p>
      
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>CARDIO AREA</h4>
          <p><img src="cardio.jpg" width=400 height=200></p>

         

        <div class="col-lg-6">
          <h4>STRETCHING AREA</h4>
          <p><img src="stretching.jpg" width=400 height=200></p
		  
		  <div class="col-lg-6">
          <h4>WEIGHT LIFTING AREA</h4>
          <p><img src="weight.jpg" width=400 height=200></p>

        
        </div>
      </div>

      

    </div>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
