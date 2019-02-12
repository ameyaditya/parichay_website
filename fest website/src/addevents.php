<?php 
	$db = mysqli_select_db($con, 'parichay');
	if(!$db){
		$sql = 'CREATE DATABASE parichay';
		mysqli_query($sql, $con);
		$db = mysqli_select_db($con, 'parichay');
	}
	$create_table = "CREATE TABLE IF NOT EXISTS Events (
					id INT(6) AUTO_INCREMENT PRIMARY KEY,
					Name VARCHAR(30) NOT NULL,
					Category VARCHAR(30) NOT NULL,
					Price INT(5) NOT NULL,
					Description TEXT
				)";

	mysqli_query($con, $create_table);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Add Events</title>
</head>
<body>
	<div class="container">
		<h1 class="display-4">Add Events</h1>
		<form method="post" action="updateevent.php">
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Event Name</label>
		    <input class="form-control" id="exampleFormControlInput1" placeholder="Enter Event Name" name="name">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Event Category</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="category">
		      <option selected>Cultural</option>
		      <option>Technical</option>
		      <option>Sports</option>
		      <option>Others</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlInput3">Event Price</label>
		    <input class="form-control" id="exampleFormControlInput3" placeholder="Event Price" name="price">   
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Event Description</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary" name="addevent">Add Event</button>
		</form>
	</div>
</body>
</html>