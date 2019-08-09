<?php
$mysqli = new mysqli('localhost', 'root', '', 'gymmanagement');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page=isset($_GET['p'])? $_GET['p']:'';
if($page=='view')
{
	$result= $mysqli->query("SELECT equipid,name,vendor,amount,phone,date FROM equip WHERE (deleted!=1)");
	while($row = $result->fetch_assoc())
	{
		?> 
									<tr>
									
										<td><?php echo $row['equipid'] ?></td>
										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['vendor'] ?></td>
										<td><?php echo $row['amount'] ?></td>
										
										<td><?php echo $row['phone'] ?></td>
										<td><?php echo $row['date'] ?></td>
										
									</tr>

		<?php
	}
}
else{


header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);




if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE equip SET name='" . $input['name'] . "', vendor='" . $input['vendor'] . "', amount='" . $input['amount'] . "', 
			phone='" . $input['phone'] . "'  WHERE equipid='" . $input['equipid'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query("UPDATE equip SET deleted=1 WHERE equipid='" . $input['equipid'] . "'");
} else if ($input['action'] == 'restore') {
    $mysqli->query("UPDATE equip SET deleted=0 WHERE equipid='" . $input['equipid'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
}
?>