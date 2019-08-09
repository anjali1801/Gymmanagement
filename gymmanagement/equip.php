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
<link rel="stylesheet" type="text/js" href="js/bootstrap.js">
</head>

<body class="b">
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h1 class="text-left a">SWEAT!!</h1>
			<p class="text-left c">Gain comes to those who sweat <br> Don't say you wish,say u will</p>
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
			<label class="label col-md-2 control-label">VENDOR</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="vname">
				</div>
			</div>
			
		<div class="row">
			<label class="label col-md-2 control-label">AMOUNT</label>
				<div class="col-md-10">
					<input type="number" class="form-control" name="amt">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">PHONE</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="phone">
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
			$c=$_REQUEST["vname"];
			$d=$_REQUEST["amt"];
			$f=$_REQUEST["phone"];
			
			
			
			if($a!="" and $b!="" and $c!="" and $d!="" and $f!="" )
			{
				$query="insert into equip(equipid,name,vendor,amount,phone) values('$a','$b','$c','$d','$f')";
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