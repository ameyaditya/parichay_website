<!DOCTYPE html>
<html>
<head>
	<title>RNSIT - Marathon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
 

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="back.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>
	<button class="btn btn-secondary btn-success" id="registerbtn" onclick="window.location.href='marathon-tickets.php'">Register<br> Now</button>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a href="index.php" class="navbar-brand">Parichay Marathon</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a href="#" class="nav-link">Home<span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="#aboutmarathon" class="nav-link">About Marathon</a>
				</li>
				<li>
					<a href="#mu-pricing" class="nav-link">Pricing</a>
				</li>
				<li>
					<a href="#eventgallery" class="nav-link" id="">Event Gallery</a>
				</li>
				<!--
				<li>
					<a href="#" class="nav-link">Sponsors</a>
				</li>-->
			</ul>
		</div>
	</nav>
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="banner">
					<div class="bg">
					</div>
					<!--
					<h1 class="display-2" id="marathon-header-big">RNSIT Marathon</h1>
					<h1 class="display-4" id="marathon-header-small">RNSIT Marathon</h1>-->
				</div>

			</div>
		</div>		
	</div>

	<div class="counter">
		<div class="container">
			<div class="flex-container ">
				<div class="flex-item"><div class="cont"><div id="days"></div><h1>Days</h1></div></div>
				<div class="flex-item"><div class="cont"><div id="hours"></div><h1>Hours</h1></div></div>
				<div class="flex-item"><div class="cont"><div id="mins"></div><h1>Mins</h1></div></div>
				<div class="flex-item"><div class="cont"><div id="secs"></div><h1>Secs</h1></div></div>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 class="mu-title" id="aboutmarathon">About Marathon</h2>
		<p class="lead">Run, because we owe it to them.
Run, so that those roars, chirps, growls don't fade away to silence .
Tie those shoe laces tight and break the sweat, run it to save the wildlife.
A marathon is taking place at RNSIT on the 24th of March. 
So, Step-Up Bengaluru! 

</p>
	</div>
	<div class="container-fluid events">
		<div class="row">
			<div class="col-md-3 event-item align-self-center">
				<div id="venue" class="events-icons"></div>
				RNS Institute of Technology
			</div>
			<div class="col-md-3 event-item align-self-center">
				<div id="date" class="events-icons"></div>
				March 24th, 2019
			</div>
			<div class="col-md-3 event-item align-self-center">
				<div id="breakfast" class="events-icons"></div>
			Free Breakfast
			</div>
			<div class="col-md-3 event-item align-self-center">
				<div id="medals" class="events-icons"></div>
			Winner Medals
			</div>
		</div>
	</div>

		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">
							
							<div class="mu-title-area">
								<h2 class="mu-title">Pricing plans</h2>
								<p>Choose the plan that suits you the best and get ready to run!</p>
							</div>
							
							<div class="mu-pricing-conten">
								<div class="row">
									<!-- single price item -->
									<div class="col-md-6">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">Rs.</span>
												<span class="mu-rate">250</span>
												<span class="mu-time">/per head</span>
											</div>
											<h3 class="mu-price-title">BASIC</h3>
											<ul>
												<li>Basic Ticket</li>
												<li>Free Breakfast</li>
												<li>Winners medal</li>
											</ul>
											
										</div>
									</div>
									<!-- / single price item -->

									<!-- single price item -->
									<div class="col-md-6">
										<div class="mu-single-price mu-popular-price">
											<span class="mu-price-tag">Popular</span>
											<div class="mu-single-price-head">
												<span class="mu-currency">Rs.</span>
												<span class="mu-rate">350</span>
												<span class="mu-time">/per head</span>
											</div>
											<h3 class="mu-price-title">STANDARD</h3>
											<ul>
												<li>Basic Ticket</li>
												<li>Free Breakfast</li>
												<li>Winners medal</li>
												<li>Marathon T-Shirt</li>
											</ul>
										</div>
									</div>
									<!-- / single price item -->
				
							</div>
							<div class="container">
								<button class="btn btn-primary btn-lg btn-block btn-danger" onclick="window.location = 'marathon-tickets.php'">Buy Tickets</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->






	<div class="container-fluid event-box" id="eventgallery">
		<h1 class="mu-title">Event Gallery</h1>
		<div class="desk-event">
		<div class="row">
				<div class="col-sm-3 gallery" id="gallery1">
				</div>
				<div class="col-sm-3 gallery" id="gallery2">
					
				</div>
				<div class="col-sm-3 gallery" id="gallery3">
					
				</div>
				<div class="col-sm-3 gallery" id="gallery4">
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 gallery" id="gallery1">
				</div>
				<div class="col-sm-3 gallery" id="gallery2">
					
				</div>
				<div class="col-sm-3 gallery" id="gallery3">
					
				</div>
				<div class="col-sm-3 gallery" id="gallery4">
					
				</div>
			</div>
		</div>
		<div class="mobile-event">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="images/sample-square.png" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/sample-square.png" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/sample-square.png" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
<div class="container video">
	<h1 class="mu-title">Previous Event Video</h1>
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
	</div>
</div>


	<!--
	<div class="container-fluid spn-box">
		<h1 class="display-4">Sponsors</h1>
		<div class="row">
			<div class="col-sm-4 sponsor">
				
			</div>
			<div class="col-sm-4 sponsor">
				
			</div>
			<div class="col-sm-4 sponsor">
				
			</div>
		</div>
	</div>
-->
<footer class="bottom-footer">
	<ul>
		<li class="nav-link"><a onclick="topFunction()" >Home</a></li>
		<li class="nav-link"><a href="#aboutmarathon">About Marathon</a></li>
		<li class="nav-link"><a href="#mu-pricing">Pricing</a></li>
		<li class="nav-link"><a href="#eventgallery">Events Gallery</a></li>
	</ul>
</footer>
</body>
</html>