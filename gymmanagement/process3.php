<?php
$mysqli = new mysqli('localhost', 'root', '', 'gymmanagement');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page=isset($_GET['p'])? $_GET['p']:'';
if($page=='view')
{
	$result= $mysqli->query("SELECT facilityid,name,amount FROM faciities where (deleted!=1)");
	while($row = $result->fetch_assoc())
	{
		?> 
									<tr>
									
										<td><?php echo $row['facilityid'] ?></td>
										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['amount'] ?></td>
										
										
										
									</tr>

		<?php
	}
}
else{


header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);




if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE faciities SET name='" . $input['name'] . "'
	, amount='" . $input['amount'] . "' WHERE facilityid='" . $input['facilityid'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query("UPDATE faciities SET deleted=1 WHERE facilityid='" . $input['facilityid'] . "'");
} else if ($input['action'] == 'restore') {
    $mysqli->query("UPDATE faciities SET deleted=0 WHERE facilityid='" . $input['facilityid'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
}
?>