<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="gymmanagement";
	
	mysql_connect($host,$user,$password);
	mysql_select_db($db);
	if(isset($_POST['username']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$query="select * from admin where username='".$username."' and password='".$password."' limit 1";
		
		$result=mysql_query($query);
		if(mysql_num_rows($result)==1)
		{
			$_session['username']=$username;
			header("location:menu.php");
			exit();
			
		}
		else
		{
			header("location:login.php");
			exit();
			
		}
	}
?>
		
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


		

</head>
<body>

	<div class="container">
	<h1> THE SQUARE BALL GYM </h1>
	
		<div class="col-lg-4"></div>
		<div class="col-lg-4"> 
		
			<div class="jumbotron">
	
			<form method="POST" action="" class="formcontainer">
			<div class="form-group">
			<label for="exampleInputEmail1">Username:</label>
			<input type="username" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
			</div>
			<div class="form-group">
			<label for="exampleInputPassword1">Password:</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
  
			<div class="checkbox">
			<label>
			<input type="checkbox"> Remember me
			</label>
			</div>
			<button type="submit" class="btn btn-primary form-control">Login</button>
			
			
			
			
			</div>
		</div>
		<div class="col-lg-4"></div >
		
		
	
		
		
	</div>
</body>
</html>
	