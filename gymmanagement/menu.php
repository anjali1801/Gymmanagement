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


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" > </script>


</head>
<body>

	<div class="container" style="min-height:1000px">
		<div class="row">
			<nav class="navbar navbar-inverse navbar-fixed-top" >
		<div class="container">
		<div class="navbar-header">
		<a href="#" class="navbar-brand">THE SQUARE BALL </a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavs">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		</div>
		<div class="collapse navbar-collapse" id="mynavs">
		<ul class="nav navbar-nav">
			<li> <a href="../gymmanagement/bootstrap-3.3.7/docs/examples/jumbotron-narrow/about.php" >About</a></li>
			<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown" >Registration <span class="caret"></span></a>
				<ul class="dropdown-menu dropbtn">
					<li> <a href="userregistration.php" >User Registration</a></li>
					<li> <a href="equip.php" >Equipment Registration</a></li>
					<li> <a href="trainer-reg.php" >Trainer Registration</a></li>
					<li> <a href="facility.php" >Facility Addition</a></li>
				</ul>
			</li>
			
			<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown">Manage<span class="caret"></span></a>
				<ul class="dropdown-menu dropbtn">
					<li> <a href="manage_members.html" >Member</a></li>
					<li> <a href="manage_equip.html" >Equipment</a></li>
					<li> <a href="manage_trainer.html" >trainer</a></li>
					<li> <a href="manage_facility.html" >facility</a></li>
				</ul>
			
			</li>
			<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown">Payment<span class="caret"></span></a>
			<ul class="dropdown-menu dropbtn">
					<li> <a href="pay.html" >Make Payment</a></li>
					<li> <a href="notpaid.php" > Not Paid</a></li>
					<li> <a href="paid.php" > Paid</a></li>
			</ul>
			</li>
			<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown">View_Lists<span class="caret"></span></a>
				<ul class="dropdown-menu dropbtn">
					<li> <a href="memberlist.php" >Member</a></li>
					<li> <a href="equiplist.php" >Equipment</a></li>
					<li> <a href="facilitylist.php" >Facilities</a></li>
					<li> <a href="trainerlist.php" >Trainer</a></li>
					<li> <a href="trainermem.php" >Members Under Trainers</a></li>
					<li> <a href="facilitymem.php" >Members Under Facilities</a></li>
					
					<li> <a href="procedure.php" >Trainer Specialization</a></li>
				</ul>
			
				
			</li>
				
			<li > <a href="stats.php">Statistics</a></li>
			<li > <a href="trigger.php">Recent User Registration</a></li>
				
			<li> <a href="login.php" >Logout</a></li>

		</ul>
		</div>
		</div>
		</nav>
		</div>
		<div style="font-size:50px;color:#e7e7e7;margin-top:80px;"> Y GYMMING!!!!???
	</div>
	<div style="color:#e7e7e7;font-size:20px;margin-top:90px;"> Exercise doesn't just strengthen your muscles, it also strengthens your heart and bones, lowers your blood pressure and of course, reduces your body fat. America may be one of the healthier nations, but go to the gym once in a while and you can stand many shades healthier and slimmer than the rest
	</div>
		
	</div>
	
	
	
</body>
</html>