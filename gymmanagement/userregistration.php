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
<link rel="stylesheet" type="text/css" href="css/style3.css">
<link rel="stylesheet" type="text/js" href="js/bootstrap.js">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		
		<div class="col-md-6 div1">
		<a class="btn btn-danger" href="menu.php" role="button" style="background-color:blue">HOME</a>
		
		<h1 class="text-center" style="color:white;">Register</h1>
		<form action="" method="POST">
		<label class="label col-md-3 control-label">USER_ID</label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="id">
		</div>
		
		<label class="label col-md-3 control-label">FIRST NAME</label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="fname">
		</div>
		
		<label class="label col-md-3 control-label">LAST NAME</label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="lname">
		</div>
		
		<label class="label col-md-3 control-label">AGE</label>
		<div class="col-md-9">
			<input type="number" class="form-control" name="age">
		</div>
		
		<label class="label col-md-3 control-label">GENDER</label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="sex">
		</div>
		
		<label class="label col-md-3 control-label">PHONE</label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="phone">
		</div>
		
		<label class="label col-md-3 control-label">FACILITY_ID</label>
		<div class="col-md-9">
			<input type="number" class="form-control" name="fid">
			<a class="btn btn-danger" href="facilitylist.php" role="button" style="background-color:blue">AVAILABLE FACILITIES</a>
		</div>
		
		<label class="label col-md-3 control-label">TRAINER_ID</label>
		<div class="col-md-9">
			<input type="number" class="form-control" name="tid">
			<a class="btn btn-danger" href="trainerlist.php" role="button" style="background-color:blue">AVAILABLE TRAINER</a>
		</div>
		
		
		<label class="label col-md-3 control-label">ADDRESS</label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="addr">
		</div>
		
		<label class="label col-md-3 control-label">PLAN</label>
		<div class="col-md-9">
			<select class="form-control op" name="plan">
			<option value="1 month">1month</option>
			<option value="quaterly">quaterly</option>
			<option value="half-yearly">half-yearly</option>
			<option value="yearly">yearly</option>
			</select>
		</div>
		
		
			<input type="submit" name="submit" class="btn btn-info"  value="SUBMIT">
		

		</form>
		
		
		
		</div>
		<div class="col-mid-3"></div>
		
	</div>
</div>
<?php
		
		if(isset($_REQUEST["submit"]))
		{
			
		
		
		
			$a=$_REQUEST["id"];
			$b=$_REQUEST["fname"];
			$c=$_REQUEST["lname"];
			$d=$_REQUEST["age"];
			$e=$_REQUEST["sex"];
			$f=$_REQUEST["phone"];
			$g=$_REQUEST["fid"];
			$h=$_REQUEST["tid"];
			
			$k=$_REQUEST["plan"];
			$j=$_REQUEST["addr"];
			
			if($a!="" and $b!="" and $c!="" and $d!="" and $e!="" and $f!="" and $j!="" and $k!="")
			{
				$query="insert into user(userid,firstname,lastname,age,sex,phone,address,plan,trainer_id,facility_id) values('$a','$b','$c','$d','$e','$f','$j','$k','$h','$g')";
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
