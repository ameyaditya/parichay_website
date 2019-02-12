<?php
	$con = mysqli_connect('localhost', 'root', '', 'parichay');
	$get_events = "SELECT *FROM events";
	$result = array();
	$rows = mysqli_query($con, $get_events);
	while($row = mysqli_fetch_assoc($rows)){
		array_push($result, $row);
	}
	$result = json_encode($result);
	echo $result;
?>