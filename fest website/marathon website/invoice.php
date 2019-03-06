<?php
	include('invoice_generator/src/InvoicePrinter.php');
	require_once("config.php");
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$orderid = isset($_GET['orderid']) ? $_GET['orderid'] : "";
	$query = "SELECT *FROM payment_submit WHERE order_id = '$orderid'";
	$res = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($res);
	$name = $row['name'];
	$email = $row['email_id'];
	$basic = $row['basic_ticket'];
	$standard = $row['standard_ticket'];
	$category = $row['category'];
	$subcategory = $row['sub_category'];
	$status = $row['status'];
	if($status == 1){
		$invoice = new InvoicePrinter();
		/* Header Settings */
		$invoice->setLogo("images/CAT-LOGO.png");
		$invoice->setColor("#677a1a");
		$invoice->setType("Ticket Invoice");
		$invoice->setReference($orderid);
		$invoice->setDate(date('d-m-Y',time()));
		$invoice->setTime(date('h:i:s A',time()));	
		//$invoice->hide_tofrom();
		$invoice->setFrom(array("CAT - RNSIT", "Name: Aditya Kotari", "Phone Number: 9999999999", false, false, false));
		$invoice->setTo(array("Name: ".$name, "Email ID: ".$email, "Category: ".$category, "Sub Category: ".$subcategory, false, false));

		/* Adding Items in table */
		if($basic > 0){
			$invoice->addItem("Basic Ticket","Marathon ticket, winners medal, free refreshments",$basic,false,200,false,$basic*200);
		}
		if($standard > 0){
			$invoice->addItem("Standard Ticket","Marathon Ticket, Marathon T-Shirt, Winners Medal, Free Refreshments",$standard,false,320,false,$standard*320);
		}
		/* Add totals */
		$invoice->addTotal("Total",($basic*200 + $standard*320));

		$invoice->addBadge("Payment Paid");
		$invoice->addTitle("Rules and Regulations");
		$invoice->addParagraph("No item will be replaced or refunded if you don't have the invoice with you.\nYou can refund within 2 days of purchase.");
		$invoice->setFooternote("CAT - RNSIT");
		/* Render */
		$invoice->render('StepupTicket.pdf','D');
	}
?>

