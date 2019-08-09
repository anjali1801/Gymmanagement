<?php
$mysqli = new mysqli('localhost', 'root', '', 'gymmanagement');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page=isset($_GET['p'])? $_GET['p']:'';
if($page=='view')
{
	$result= $mysqli->query("SELECT userid,firstname,lastname,age,sex,phone,address,timestamp,plan,trainer_id,facility_id FROM user where (deleted!=1)");
	while($row = $result->fetch_assoc())
	{
		?> 
									<tr>
									
										<td><?php echo $row['userid'] ?></td>
										<td><?php echo $row['firstname'] ?></td>
										<td><?php echo $row['lastname'] ?></td>
										<td><?php echo $row['age'] ?></td>
										<td><?php echo $row['sex'] ?></td>
										<td><?php echo $row['phone'] ?></td>
										<td><?php echo $row['address'] ?></td>
										<td><?php echo $row['timestamp'] ?></td>
										<td><?php echo $row['plan'] ?></td>
										<td><?php echo $row['trainer_id'] ?></td>
										<td><?php echo $row['facility_id'] ?></td>
										
									</tr>

		<?php
	}
}
else{


header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);




if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE user SET firstname='" . $input['firstname'] . "', lastname='" . $input['lastname'] . "', age='" . $input['age'] . "', sex='" . $input['sex'] . "', phone='" . $input['phone'] . "', address='" . $input['address'] . "', plan='" . $input['plan'] . "', trainer_id='" . $input['trainer_id'] . "', facility_id='" . $input['facility_id'] . "' WHERE userid='" . $input['userid'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query("UPDATE user SET deleted=1 WHERE userid='" . $input['userid'] . "'");
} else if ($input['action'] == 'restore') {
    $mysqli->query("UPDATE user SET deleted=0 WHERE userid='" . $input['userid'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
}
?>