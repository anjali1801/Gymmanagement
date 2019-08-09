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

<body>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h1 class="text-left">SWEAT!!</h1>
			<p class="text-left">Gain comes to those who sweat <br> Don't say you wish,say u will</p>
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-6">
				<a class="btn btn-primary" href="menu.php" role="button">HOME</a>
					<h3 class="text-left">REGISTER</h3>
					
				
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
			<label class="label col-md-2 control-label">FIRST NAME</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="fname">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">LAST NAME</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="lname">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">AGE</label>
				<div class="col-md-10">
					<input type="number" class="form-control" name="age">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">SEX</label>
				<div class="col-md-10">
				<select class="form-control op" name="sex">
					<option value="male">male</option>
					<option value="female">female</option>
				</select>
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">EMAIL</label>
				<div class="col-md-10">
					<input type="email" class="form-control" name="email">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">PHONE</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="phone">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">ADDRESS</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="address">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">DOJ</label>
				<div class="col-md-10">
					<input type="date" class="form-control" name="doj">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-md-2 control-label">FACILITY_ID</label>
				<div class="col-md-10">
					<input type="number" class="form-control" name="fid">
					<a class="btn btn-danger" href="facilitylist.php" role="button" style="background-color:blue">AVAILABLE FACILITIES</a>
				</div>
			</div>
			<input type="submit" name="submit" class="btn btn-info"  value="SUBMIT">
			</form>
			
			</div>
		</div>
		
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
			$f=$_REQUEST["email"];
			$g=$_REQUEST["phone"];
			$h=$_REQUEST["address"];
			$i=$_REQUEST["doj"];
			$j=$_REQUEST["fid"];
			
			if($a!="" and $b!="" and $c!="" and $d!="" and $e!="" and $f!="" and $j!="")
			{
				$query="insert into trainer(trainerid,firstname,lastname,age,sex,email,phone,address,dateofjoining,facilityid) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
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