<!DOCTYPE html>
<html>
<head>
	<title>Parichay- Events</title>
	<title>Parichay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.dec').click(function(){
				var id = this.id;
				id = id.split("-")[1];
				counterid = "counter"+id;
				var val = document.getElementById('counter-'+id).innerHTML;
				val = Number(val);
				if(val != 0){
					val = val - 1;
				}
				$("#counter-"+id).text(String(val));
			})
			$('.inc').click(function(){
				var id = this.id;
				id = id.split("-")[1];
				counterid = "counter"+id;
				var val = document.getElementById('counter-'+id).innerHTML;
				val = Number(val) + 1;
				$("#counter-"+id).text(String(val));
			})
		});
	</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Parichay</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">

		      <li class="nav-item">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item dropdown active">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Events
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Technical</a>
		          <a class="dropdown-item" href="#">Cultural</a>
		          <a class="dropdown-item" href="#">Gaming</a>
		          <a class="dropdown-item" href="#">Sports</a>
		        </div>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">Sponsors</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">Contact Us</a>
		      </li>

		      <li class="nav-item">
		      </li>
		      
		    </ul>
		    	<p>
		    		<a href="#">
		          		<i class="fa fa-shopping-cart" style="font-size:24px; text-decoration: none; color: grey; text-decoration-color: grey;"></i>
		          		 Cart
		      		</a>
		      	</p>
		  </div>
	</nav>
	<h1 class="h1 eve-heading">Parichay - Events</h1>
	<h1 class="h1 eve-heading-small">Parichay - Events</h1>
	<div id="myBtnContainer">
		<p class="lead">Filters</p>
		<button class="btn active" onclick="filterSelection('all')"> Show all</button>
		<button class="btn" onclick="filterSelection('technical')"> technical</button>
		<button class="btn" onclick="filterSelection('cultural')"> Cultural</button>
		<button class="btn" onclick="filterSelection('gaming')"> Gaming</button>
		<button class="btn" onclick="filterSelection('sports')"> Sports</button>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="event-box">
					<div class="event-box-images">
						
					</div>
					<div class="event-box-heading">
						<h6 class="event-box-head">Heading</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<button id="dec-1" class="dec">-</button><div class="counter" id="counter-1">0</div><button id="inc-1" class="inc">+</button>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="event-box">
					<div class="event-box-images">
						
					</div>
					<div class="event-box-heading">
						<h6 class="event-box-head">Heading</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<button id="dec-2" class="dec">-</button><div class="counter" id="counter-2">0</div><button id="inc-2" class="inc">+</button>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="event-box">
					<div class="event-box-images">
						
					</div>
					<div class="event-box-heading">
						<h6 class="event-box-head">Heading</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<button id="dec-3" class="dec">-</button><div class="counter" id="counter-3">0</div><button id="inc-3" class="inc">+</button>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="event-box">
					<div class="event-box-images">
						
					</div>
					<div class="event-box-heading">
						<h6 class="event-box-head">Heading</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<button id="dec-4" class="dec">-</button><div class="counter" id="counter-4">0</div><button id="inc-4" class="inc">+</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>