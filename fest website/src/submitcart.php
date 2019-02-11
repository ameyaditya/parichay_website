<?php 
	$data = $_POST['data'];
	$dat = json_decode($data, true);
	echo $dat[0]['event_name'];
?>