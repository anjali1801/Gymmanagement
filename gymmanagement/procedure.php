<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="gymmanagement";
	
	$con=mysqli_connect($host,$user,$password,$db);
	$query= "call trainer_fac()";
	$result= mysqli_query($con,$query);
	
	
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
		<h3 align="centre">TRAINER SPECIALIZATION</h3>
			<br>
				<div class="table-responsive">
					<table id="data" class="table table-striped table-bordered">
						<thead>
							<tr>
								<td> TRAINER ID </td>
								<td> FIRST NAME </td>
								<td> LAST NAME </td>
								<td>SPECIALIZATION</td>
								
								
							
							
							</tr>
							<?php
								while($row=mysqli_fetch_array($result))
								{
									echo'
									<tr>
										<td>'.$row["trainerid"].'</td>
										<td>'.$row["firstname"].'</td>
										
										
										<td>'.$row["lastname"].'</td>
										<td>'.$row["name"].'</td>
										
										
										
										
										
									
									</tr>';
							
								}
							
							
							
							?>
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