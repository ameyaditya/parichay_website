<?php
session_start();
if(!isset($_SESSION['registering_form'])){
	header("Location: index.php");
}
require_once("config.php");
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$orderid = isset($_POST['ORDERID']) ? $_POST['ORDERID'] : "";
$merchmid = isset($_POST['MID']) ? $_POST['MID']: "";
$amount = isset($_POST['TXNAMOUNT']) ? $_POST['TXNAMOUNT'] : "";
$TXNID = isset($_POST['TXNID']) ? $_POST['TXNID']: "";
$ORDERID = isset($_POST['ORDERID']) ?$_POST['ORDERID']: "";
$CUST_ID = isset($_POST['CUST_ID']) ?$_POST['CUST_ID']: "";
$BANKTXNID = isset($_POST['BANKTXNID']) ?$_POST['BANKTXNID']: "";
$TXNAMOUNT = isset($_POST['TXNAMOUNT']) ?$_POST['TXNAMOUNT']: "";
$CURRENCY = isset($_POST['CURRENCY']) ?$_POST['CURRENCY']: "";
$STATUS = isset($_POST['STATUS']) ?$_POST['STATUS']: "";
$RESPCODE = isset($_POST['RESPCODE']) ?$_POST['RESPCODE']: "";
$RESPMSG = isset($_POST['RESPMSG']) ?$_POST['RESPMSG']: "";
$TXNDATE = isset($_POST['TXNDATE']) ?$_POST['TXNDATE']: "NULL";
$GATEWAYNAME = isset($_POST['GATEWAYNAME']) ?$_POST['GATEWAYNAME']: "";
$PAYMENTMODE = isset($_POST['PAYMENTMODE']) ?$_POST['PAYMENTMODE']: "";
if($TXNDATE == "NULL"){
	$insert_det = "INSERT INTO callback_details(TXNID, ORDERID, CUST_ID, BANKTXNID, TXNAMOUNT, CURRENCY, STATUS, RESPCODE, RESPMSG, GATEWAYNAME, PAYMENTMODE) VALUES ('$TXNID', '$ORDERID', '$CUST_ID', '$BANKTXNID', '$TXNAMOUNT', '$CURRENCY', '$STATUS', '$RESPCODE', '$RESPMSG', '$GATEWAYNAME', '$PAYMENTMODE')";
}else{
	$insert_det = "INSERT INTO callback_details(TXNID, ORDERID, CUST_ID, BANKTXNID, TXNAMOUNT, CURRENCY, STATUS, RESPCODE, RESPMSG, TXNDATE, GATEWAYNAME, PAYMENTMODE) VALUES ('$TXNID', '$ORDERID', '$CUST_ID', '$BANKTXNID', '$TXNAMOUNT', '$CURRENCY', '$STATUS', '$RESPCODE', '$RESPMSG', '$TXNDATE', '$GATEWAYNAME', '$PAYMENTMODE')";
}
mysqli_query($con, $insert_det);
$hashstring = $orderid."/".$merchmid."@".$amount;
$hashed_value = crypt($hashstring, SALT);
$res = mysqli_query($con, "SELECT *FROM hash_table WHERE order_id = '$orderid'");
$validated = 0;
if(mysqli_num_rows($res) > 0){
	while($row = mysqli_fetch_assoc($res)){
		if(hash_equals($row['hash'], $hashed_value)){
			$validated = 1;
			break;
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Step Up 2.0 - Transaction Status</title>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
 

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a href="index" class="navbar-brand">Step Up 2.0</a>
	</nav>
	<?php 
if($validated == 1){
	$successTransaction = $_POST['RESPCODE'];
	if($successTransaction == "01"){
	$query_status = "UPDATE payment_submit SET status=1 WHERE order_id='$orderid'";
	mysqli_query($con, $query_status);
	$query = "SELECT *FROM payment_submit WHERE order_id = '$orderid'";
	$res = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($res);
	$name = $row['name'];
	$email = $row['email_id'];
	$category = $row['category'];
	$subcategory = $row['sub_category'];
	$basic = $row['basic_ticket'];
	$standard = $row['standard_ticket'];
?>
	<div class="container-fluid success-main">
		<div class="success-logo">
			
		</div>
	</div>

	<div class="container ticket-details">
		<h1>Transaction Successful: Rs. <?php echo $amount;?></h1><?php if($basic > 0){ ?>
		<div class=" orderdetails">
			<div class="row">
				<div class="col-4">
					<b>Order ID</b>
				</div>
				<div class="col-1">
					<b>:</b>
				</div>
				<div class="col-6">
					<p class="lead"><?php echo $orderid;?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<b>Name</b>
				</div>
				<div class="col-1">
					<b>:</b>
				</div>
				<div class="col-6">
					<p class="lead"><?php echo $name;?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<b>Category</b>
				</div>
				<div class="col-1">
					<b>:</b>
				</div>
				<div class="col-6">
					<p class="lead"><?php echo $category;?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<b>Sub Category</b>
				</div>
				<div class="col-1">
					<b>:</b>
				</div>
				<div class="col-6">
					<p class="lead"><?php echo $subcategory;?></p>
				</div>
			</div>
		</div>
		<h3 style="margin-top: 20px;">Order Details</h3>
		<div class="row indv-details"><div class="col-5">Basic Ticket</div><div class="col-2">X</div><div class="col-5"><?php echo $basic; ?></div></div>
			<?php } 
			if($standard > 0){ ?>
				<div class="row"><div class="col-5">Standard Ticket</div><div class="col-2">X</div><div class="col-5"><?php echo $standard; ?></div></div>
			<?php } ?>
			<div class="invoice"><a href=<?php echo '"'."invoice.php?orderid=".$orderid.'"'?>>Download Ticket Invoice</a></div>
			<div class="backtohome"><a href="index.php">Back to Homepage</a></div>
		</div>
	</div>
<?php }
	else{
 ?>
<div class="container-fluid fail-main">
		<div class="fail-logo">
		</div>
</div>
<div class="container ticket-details">
	<h1>Error occured during Transaction.</h1>
	<div class=row>
		<div class="col-4">
			<b>Order ID</b><br>
		</div>
		<div class="col-1">
			<b>:</b>
		</div>
		<div class="col-6">
			<p class="lead"><?php echo $orderid;?></p>
		</div>
	</div>
	<div class=row>
		<div class="col-4">
			<b>Response Message: </b><br>
		</div>
		<div class="col-1">
			<b>:</b>
		</div>
		<div class="col-6">
			<p class="lead"><?php echo $RESPMSG;?></p>
		</div>
	</div>
</div>
<?php }}
else{ 
	$que = "INSERT INTO review_order(order_id) VALUES ('$orderid'";
	mysqli_query($con, $que);
?>
<div class="container-fluid success-main">
		<div class="success-logo">
			
		</div>
	</div>

	<div class="container ticket-details">
		<h1>Transaction Successful: Rs. <?php echo $amount;?></h1><?php if($basic > 0){ ?>
		<div class=" orderdetails">
			<div class="row">
				<div class="col-4">
					<b>Order ID</b><br><small>Save the Order ID for Future References.</small>
				</div>
				<div class="col-1">
					<b>:</b>
				</div>
				<div class="col-6">
					<p class="lead"><?php echo $orderid;?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<b>Name</b>
				</div>
				<div class="col-1">
					<b>:</b>
				</div>
				<div class="col-6">
					<p class="lead"><?php echo $name;?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<b>Email ID</b>
				</div>
				<div class="col-1">
					<b>:</b>
				</div>
				<div class="col-6">
					<p class="lead"><?php echo $email;?></p>
				</div>
			</div>
		</div>
		<h3 style="margin-top: 20px;">Order Details</h3>
		<div class="row indv-details"><div class="col-5">Basic Ticket</div><div class="col-2">X</div><div class="col-5"><?php echo $basic; ?></div></div>
			<?php } 
			if($standard > 0){ ?>
				<div class="row"><div class="col-5">Standard Ticket</div><div class="col-2">X</div><div class="col-5"><?php echo $standard; ?></div></div>
			<?php } ?>
			<div class="backtohome"><a href="index.php">Back to Homepage</a></div>
		</div>
</div>


<?php } 
session_destroy();?>
</body>
</html>