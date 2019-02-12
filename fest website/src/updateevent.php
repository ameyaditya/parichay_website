<?php
	$con = mysqli_connect('localhost', 'root', '', 'parichay');
	$event_name = $_POST['name'];
	$event_category = $_POST['category'];
	$event_price = $_POST['price'];
	$event_description = $_POST['description'];
	$add_event = "INSERT INTO events(Name, Category, Price, Description) VALUES('$event_name', '$event_category', '$event_price', '$event_description')";
	mysqli_query($con, $add_event);
	header("Location: addevents.php")
?>