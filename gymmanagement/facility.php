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
<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style4.css">
<link rel="stylesheet" type="text/css" href="css/style5.css">
<link rel="stylesheet" type="text/js" href="js/bootstrap.js">
</head>

<body class="bg">
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h1 class="text-left">SWEAT!!</h1>
			<p class="text-left">IF YOU FEEL YOU CAN DO IT <br> YOU WILL DO IT</p>
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-left">ADD</h3>
				
				</div>
			
				<div class="col-md-6">
				<span class="glyphicon glyphicon-pencil"></span></div>
				
			</div>
			<br>
			<form action="" method="POST">
			<div class="row">
			<label class="label col-md-2 control-label">ID</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="id">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">NAME</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="name">
				</div>
			</div>
			
			
			
			
			<div class="row">
			<label class="label col-md-2 control-label">AMOUNT</label>
				<div class="col-md-10">
					<input type="number" class="form-control" name="amt">
				</div>
			</div>
			
		
			
			
		
			<input type="submit" name="submit" class="btn btn-info"  value="SUBMIT">
			</form>
			<a class="btn btn-primary" href="menu.php" role="button">HOME</a>
			</div>
		</div>
	</div>
</div>
<?php
		
		if(isset($_REQUEST["submit"]))
		{
			$a=$_REQUEST["id"];
			$b=$_REQUEST["name"];
			$c=$_REQUEST["amt"];
			
			
			if($a!="" and $b!="" and $c!="")
			{
				$query="insert into faciities(facilityid,name,amount) values('$a','$b','$c')";
				$data=mysql_query($query);
				if($data)
				{
					
					echo "data inserted into database";
				}
				
			}
				else
				{
					echo "ALL FIELDS ARE MANDATORY";
				}
		}
			
			
		
		
		
?>
</body>
</html>