<!DOCTYPE html>
<html>
<head>
	<title>Marathon Tickets</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="tickets.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a href="index.php" class="navbar-brand">Parichay Marathon</a>
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
		      <td>Basic (Marathon Ticket)</td>
		      <td>Rs: 250</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Standard (Marathon Ticket + T-Shirt)</td>
		      <td>Rs: 350</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<div class="container reg-form">
		<h1>Registration Form</h1>
		<form id="tickets-form" method="POST" action="payment.php"> 
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
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
					    Male
					  </label>
					</div>
				</div>
				<div class="col-4 md-3">
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					  <label class="form-check-label" for="exampleRadios2">
					    Female
					  </label>
				  </div>
				</div>
			</div>
			<div class="form-group">
				<label for="sub-category">Sub - Category</label>
			      <select id="inputState" class="form-control" required>
			        <option selected>Student</option>
			        <option>Teacher</option>
			        <option>Corporate</option>
			        <option>Open</option>
			      </select>
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
		  <div class="form-group">
		  	<label id="total"><h1><span>Rs. 0</span></h1></label>
		  </div>
		  <div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
		    <label class="form-check-label" for="exampleCheck1">I have read the <a href="#" style="color: blue;"> Terms & Conditions</a></label>
		  </div>
		  <button type="submit" class="btn btn-primary btn-block" id="tickets-checkout" onclick="submit_tickets()">Checkout</button>
		</form>
	</div>
</body>
</html>