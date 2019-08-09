<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="gymmanagement";
	
	mysql_connect($host,$user,$password);
	mysql_select_db($db);
	$query= "select count(*) from faciities where deleted!=1";
	$result2= mysql_query($query);
	
	$query= "select count(*) from user where deleted!=1 ";
	$result1= mysql_query($query);
	
	$query= "select count(*) from trainer where deleted!=1 ";
	$result3= mysql_query($query);
	$query= "select sum(amount) from equip where deleted!=1";
	$result4= mysql_query($query);
	$query= "select sum(amount) from user where deleted!=1 ";
	$result5= mysql_query($query);
	$res=mysql_result($result5,0)-mysql_result($result4,0);
	
	

	
	$query= "select avg(age) from trainer where deleted!=1";
	$res2=mysql_query($query);
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
 
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</head>
<body class="chia">
	<div class="container">
		<h3 align="centre">STATISTICS</h3>
			<br>
				<div class="table-responsive">
					<table id="data" class="table table-striped table-bordered">
						<thead>
						<tr>
							<td></td>
							<td>COUNT</td>
							
						</tr>	
								
							
							
							
							
								
								<tr>
										<td> <?php echo'TOTAL NO. OF MEMBERS' ?> </td>
										<td> <?php echo mysql_result($result1,0) ?> </td>
								</tr>
								<tr>
										<td> <?php echo'TOTAL NO. OF FACILITIES' ?> </td>
										<td> <?php echo mysql_result($result2,0) ?> </td>
								</tr>
								<tr>
										<td> <?php echo'TOTAL NO. OF TRAINERS' ?> </td>
										<td> <?php echo mysql_result($result3,0) ?> </td>
								</tr>
								<tr>
										<td> <?php echo'TOTAL EXPENSES(in Rs)' ?> </td>
										<td> <?php echo mysql_result($result4,0) ?> </td>
								</tr>
								<tr>
										<td> <?php echo'TOTAL INCOME(in Rs)' ?> </td>
										<td> <?php echo mysql_result($result5,0) ?> </td>
								</tr>
								
								<tr>
										<td> <?php echo'TOTAL SAVINGS(in Rs)' ?> </td>
										<td> <?php echo $res ?> </td>
								</tr>
								
							
							
							
							
						</thead>
					</table>
					<a class="btn btn-primary" href="menu.php" role="button" style="background-color:blue">HOME</a>
		
				
				</div>
			</div>








</body>
</html>


<script>
$(document).ready(function()
{
	$('data').DataTable();
});
</script>