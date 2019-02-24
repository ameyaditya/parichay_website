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
		<a href="#" class="navbar-brand">Parichay Marathon</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	</nav>
	<div class="container">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Category</th>
		      <th scope="col">Price</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>5K Marathon</td>
		      <td>Rs: 500</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>10K marathon</td>
		      <td>Rs: 1000</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>T - Shirt</td>
		      <td>Rs: 200</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<div class="container">
		<form id="tickets-form">
		  <div class="form-group">
		    <label for="customername">Name</label>
		    <input type="text" class="form-control" id="customername" placeholder="Enter Name" required>
		  </div>
		  <div class="form-group">
		    <label for="customeremail">Email address</label>
		    <input type="email" class="form-control" id="customeremail" aria-describedby="emailHelp" placeholder="Enter Email ID" required>
		  </div>
		  <div class="form-group">
		    <label for="customerphone">Phone Number</label>
		    <input type="tel" class="form-control" id="customerphone" placeholder="Enter Phone Number" pattern="[1-9]{1}[0-9]{9}" required>
		  </div>
		  <div class="form-row form-group">
		  	<div class="col-5 md-3">
		  	<label for="5kmarathon">5K Marathon Tickets</label>
		  	</div>
		  	<div class="col-1 md-3">
		  		<label>X</label>
		  	</div>
		  	<div class="col-6 md-3">
		  		<input type="number" min="0" class="form-control" id="5kmarathon" placeholder="Enter Number of Tickets" value="0" required>
		  	</div>
		  </div>

		  <div class="form-row form-group">
		  	<div class="col-5 md-3">
		  	<label for="10kmarathon">10K Marathon Tickets</label>
		  	</div>
		  	<div class="col-1 md-3">
		  		<label>X</label>
		  	</div>
		  	<div class="col-6 md-3">
		  		<input type="number" min="0" class="form-control" id="10kmarathon" placeholder="Enter Number of Tickets" value="0" required>
		  	</div>
		  </div>

		  <div class="form-row form-group">
		  	<div class="col-5 md-3">
		  	<label for="tshirts">T-Shirts</label>
		  	</div>
		  	<div class="col-1 md-3">
		  		<label>X</label>
		  	</div>
		  	<div class="col-6 md-3">
		  		<input type="number" min="0" class="form-control" id="tshirts" placeholder="Enter Number of Tickets" value="0" required>
		  	</div>
		  </div>
		  <div class="form-group">
		  	<label id="total"><h1><span>Rs. 0</span></h1></label>
		  </div>
		  <div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">I have read the Terms & Conditions</label>
		  </div>
		  <button type="submit" class="btn btn-primary btn-block" id="tickets-checkout" aria-disabled="true">Checkout</button>
		</form>
	</div>
</body>
</html>