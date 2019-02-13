<?php 
	include 'Instamojo.php';
	$data = $_POST['data'];
	$dat = json_decode($data, true);
	$prices = json_decode($_POST['prices'], true);
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Submit cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container submitcontainer">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Event</th>
		      <th scope="col">Tickets</th>
		      <th scope="col">Price</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		$paymentfor = "";
		  		$total = 0;
		  		for($i = 0;$i < sizeof($dat); $i++ ){
		  			echo "<tr>";
		  			echo "<th scope=\"row\">".($i+1)."</th>";
		  			echo "<td>".$dat[$i]['event_name']."</td>";
		  			echo "<td>".$dat[$i]['tickets']."</td>";
		  			$paymentfor .= $dat[$i]['event_name']." X ".$dat[$i]['tickets'].", ";
		  			for($j = 0; $j< sizeof($prices); $j++){
		  				if($prices[$j]['Name'] == $dat[$i]['event_name']){
		  					$total += $dat[$i]['tickets']*$prices[$j]['Price'];
		  					echo "<td>".($dat[$i]['tickets']*$prices[$j]['Price'])."</td>";
		  				}
		  			}
		  			echo "</tr>";
		  		}
		  		$paymentfor = substr($paymentfor, 0, -2);
		  	?>
		  </tbody>
		</table>
		<?php 
		  		echo "<tr>";
		  		echo "<th rowspan='3'><h3>Total = ".$total."</h3></th>";
		  		echo "</tr>";
		?>
		<form>
		  <div class="form-group">
		    <label for="inputname">Enter your name</label>
		    <input type="text" class="form-control" id="inputname" placeholder="Enter Name" required>
		  </div>
		  <div class="form-group">
		    <label for="inputemail">Enter your name</label>
		    <input type="email" class="form-control" id="inputemail" aria-describedby="emailHelp" placeholder="Enter email" required>
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>

		  <div class="form-group">
		    <label for="phoneno">Phone Number</label>
		    <input type="tel" class="form-control" id="phoneno" pattern="[0-9]{10}" placeholder="Phone number" maxlength="10" minlength="10" required>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>