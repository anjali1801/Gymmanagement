<?php
$mysqli = new mysqli('localhost', 'root', '', 'gymmanagement');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page=isset($_GET['p'])? $_GET['p']:'';
if($page=='view')
{
	$result= $mysqli->query("SELECT trainerid,firstname,lastname,age,sex,email,phone,address,dateofjoining,facilityid,timestap FROM trainer where (deleted!=1)");
	while($row = $result->fetch_assoc())
	{
		?> 
									<tr>
									
										<td><?php echo $row['trainerid'] ?></td>
										<td><?php echo $row['firstname'] ?></td>
										<td><?php echo $row['lastname'] ?></td>
										<td><?php echo $row['age'] ?></td>
										<td><?php echo $row['sex'] ?></td>
										<td><?php echo $row['email'] ?></td>
										<td><?php echo $row['phone'] ?></td>
										<td><?php echo $row['address'] ?></td>
										<td><?php echo $row['dateofjoining'] ?></td>
										
										<td><?php echo $row['facilityid'] ?></td>
										<td><?php echo $row['timestap'] ?></td>
										
										
										
									</tr>

		<?php
	}
}
else{


header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);




if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE trainer SET firstname='" . $input['firstname'] . "', lastname='" . $input['lastname'] . "'
	, age='" . $input['age'] . "', sex='" . $input['sex'] . "', email='" . $input['email'] . "', phone='" . $input['phone'] . "', address='" . $input['address'] . "', dateofjoining='" . $input['dateofjoining'] . "'
	, facilityid='" . $input['facilityid'] . "' WHERE trainerid='" . $input['trainerid'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query("UPDATE trainer SET deleted=1 WHERE trainerid='" . $input['trainerid'] . "'");
} else if ($input['action'] == 'restore') {
    $mysqli->query("UPDATE trainer SET deleted=0 WHERE trainerid='" . $input['trainerid'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
}
?>