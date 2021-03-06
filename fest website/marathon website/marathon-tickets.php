<?php 

session_start();
$_SESSION['registering_form'] = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Step Up 2.0- Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="tickets.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a href="mainpage" class="navbar-brand">Step Up 2.0</a>
	</nav>
	<div class="container price-header">
		<h1>Pricing Plans</h1>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Plans</th>
		      <th scope="col">Price</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Basic (Marathon Ticket, breakfast, refreshments, finishers medal)</td>
		      <td>Rs: 200</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Standard (Marathon Ticket, official T-Shirt, breakfast, refreshments, finishers medal)</td>
		      <td>Rs: 320</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<div class="container reg-form">
		<h1>Registration Form</h1>
		<form id="tickets-form" method="POST" onsubmit="return submit_tickets()"> 
		  <div class="form-group">
		    <label for="customername">Name</label>
		    <input type="text" class="form-control" id="customername" name="customername"  placeholder="Enter Name" required>
		  </div>
		  <div class="form-group">
		    <label for="customeremail">Email address</label>
		    <input type="email" class="form-control" id="customeremail" name="customeremail" aria-describedby="emailHelp" placeholder="Enter Email ID" required>
		  </div>
		  <div class="form-group">
		    <label for="customerphone">Phone Number</label>
		    <input type="tel" class="form-control" id="customerphone" name="customerphone" placeholder="Enter Phone Number" pattern="[1-9]{1}[0-9]{9}" required>
		  </div>
		  <div class="form-group form-row">
			  	<div class="col-4 md-3"><label>Category</label></div>
			  	<div class="col-4 md-3">
		  		  <div class="form-check">
					  <input class="form-check-input" type="radio" name="category" id="exampleRadios1" value="male" checked>
					  <label class="form-check-label" for="exampleRadios1">
					    Male
					  </label>
					</div>
				</div>
				<div class="col-4 md-3">
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="category" id="exampleRadios2" value="female">
					  <label class="form-check-label" for="exampleRadios2">
					    Female
					  </label>
				  </div>
				</div>
			</div>
			<div class="form-group">
				<label for="sub-category">Sub - Category</label>
			      <select id="subcategory" class="form-control" name="subcategory" required>
			      	<option selected>Choose a sub-category</option>
			        <option>Student - RNSIT</option>
			        <option>Staff - RNSIT</option>
			        <option>Corporate</option>
			        <option>Senior Citizen</option>
			        <option>Public</option>
			      </select>
			</div>
			<div class="form-group" id="dynamic-subcat">
				
			</div>
		  <div class="form-row form-group">
		  	<div class="col-5 md-3">
		  	<label for="basic">Basic Tickets</label>
		  	</div>
		  	<div class="col-1 md-3">
		  		<label>X</label>
		  	</div>
		  	<div class="col-6 md-3">
		  		<input type="number" min="0" class="form-control basic" id="basic" placeholder="Enter Number of Tickets" value="0" name="basic" required>
		  	</div>
		  </div>
		  <div class="form-row form-group">
		  	<div class="col-5 md-3">
		  	<label for="standard">Standard Tickets</label>
		  	</div>
		  	<div class="col-1 md-3">
		  		<label>X</label>
		  	</div>
		  	<div class="col-6 md-3">
		  		<input type="number" min="0" class="form-control" id="standard" placeholder="Enter Number of Tickets" value="0" name="standard" required>
		  	</div>
		  </div>
		  <div id="tshirt-sizes">
		  	
		  </div>
		  <div class="form-group">
		  	<label id="total"><h1><span>Rs. 0</span></h1></label>
		  </div>
		  <div class="form-check">
		    <input type="checkbox" class="form-check-input" id="termscheck" required>
		    <label class="form-check-label" for="termscheck">I have read the <a href="#" style="color: blue;"> Terms & Conditions</a></label>
		  </div>
		  <button type="submit" name="checkout" class="btn btn-primary btn-block" id="tickets-checkout">Checkout</button>
		</form>
	</div>
</body>
</html>