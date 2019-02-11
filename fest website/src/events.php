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
		var baseprice = 100;
		var updatedamount = 0;
		var cart_items = [];
		var ind = 0;
		var total = 0;
		function Event(event_name, tickets){
			this.event_name = event_name;
			this.tickets = tickets;
		}
		$(document).ready(function(){
			$('.dec').click(function(){
				var id = this.id;
				var itemsexists = false;
				id = id.split("-")[1];
				counterid = "counter"+id;
				var val = document.getElementById('counter-'+id).innerHTML;
				var heading = document.getElementById('event-box-heading-'+id).innerHTML;
				val = Number(val);
				if(val != 0){
					val = val - 1;
					for(var i = 0; i<cart_items.length; i++){
						if(cart_items[i].event_name == heading){
							cart_items[i].tickets--;
							ind = i;
							break;
						}
					}
					if(val == 0){
						cart_items.splice(ind, 1);
					}
					updatedamount = baseprice * val;
				}
				console.log(cart_items);
				$("#counter-"+id).text(String(val));
				$("#amount-"+id).text("Rs."+String(updatedamount));
			})
			$('.inc').click(function(){
				var id = this.id;
				var itemsexists = false;
				id = id.split("-")[1];
				counterid = "counter"+id;
				var val = document.getElementById('counter-'+id).innerHTML;
				var heading = document.getElementById('event-box-heading-'+id).innerHTML;
				for(var i = 0; i<cart_items.length; i++){
					if(cart_items[i].event_name == heading){
						itemsexists = true;
						cart_items[i].tickets++;
						break;
					}
				}

				if(!itemsexists){
					var ticket = new Event(heading, 1);
					cart_items.push(ticket);
				}
				console.log(cart_items);
				val = Number(val) + 1;
				updatedamount = baseprice * val;
				$("#counter-"+id).text(String(val));
				$("#amount-"+id).text("Rs."+String(updatedamount));
			})

			$("#cart-button").click(function(){
				final_content = "<div class='container-fluid'>";
				if(cart_items.length == 0){
					$("#cart-data").text("Cart Empty");
				}
				else{
					total = 0;
					for(var i = 0;i < cart_items.length;i++){
						total += baseprice*cart_items[i].tickets;
						final_content += "<div class='row'><div class='col-sm-6'>"+cart_items[i].event_name+"</div><div class='col-sm-1'>X</div><div class='col-sm-2'>"+String(cart_items[i].tickets)+"</div><div class='col-sm-3'>"+String(baseprice*cart_items[i].tickets)+"</div></div>";
					}
					final_content += "</div>";
					console.log(final_content);
					$("#cart-items").html(final_content);
					tot_string = "<h6>Total: Rs."+String(total)+"</h6>";
					$("#total").html(tot_string);
				}
			})
			$("#close-modal").click(function(){
				$("#cart-items").html("");
				$("#cart-data").text("");
				$("#total").text("");
			})
		});
	</script>
</head>
<body>
	<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary modal-button" data-toggle="modal" data-target="#exampleModalCenter" id="cart-button">
		  <img src="images/cart.png" id="shopping-cart">
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Cart</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-modal">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <div><h4 id="cart-data"></h4></div>
		        <div class="cart-items" id="cart-items">
		        	
		        </div>
		        <div id="total"></div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" id>Check Out</button>
		      </div>
		    </div>
		  </div>
		</div>
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
						<h6 class="event-box-head" id="event-box-heading-1">Heading 1</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<div class="amount" id="amount-1">Rs.0</div>
						<button id="dec-1" class="dec">-</button><div class="counter" id="counter-1">0</div><button id="inc-1" class="inc">+</button>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="event-box">
					<div class="event-box-images">
						
					</div>
					<div class="event-box-heading">
						<h6 class="event-box-head" id="event-box-heading-2">Heading 2</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<div class="amount" id="amount-2">Rs.0</div>
						<button id="dec-2" class="dec">-</button><div class="counter" id="counter-2">0</div><button id="inc-2" class="inc">+</button>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="event-box">
					<div class="event-box-images">
						
					</div>
					<div class="event-box-heading">
						<h6 class="event-box-head" id="event-box-heading-3">Heading 3</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<div class="amount" id="amount-3">Rs.0</div>
						<button id="dec-3" class="dec">-</button><div class="counter" id="counter-3">0</div><button id="inc-3" class="inc">+</button>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="event-box">
					<div class="event-box-images">
						
					</div>
					<div class="event-box-heading">
						<h6 class="event-box-head" id="event-box-heading-4">Heading 4</h6>
					</div>
					<div class="event-box-details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
					<div class="event-box-footer">
						<div class="amount" id="amount-4">Rs.0</div>
						<button id="dec-4" class="dec">-</button><div class="counter" id="counter-4">0</div><button id="inc-4" class="inc">+</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>