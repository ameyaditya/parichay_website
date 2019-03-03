<?php
	session_start();
	if(!isset($_SESSION['registering_form']) || !isset($_POST['checkout'])){
		header("Location: index");
	}
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
// following files need to be included
	include("PaytmKit/lib/config_paytm.php");
	include("PaytmKit/lib/encdec_paytm.php");
	//require_once('PaytmKit/lib/encdec_paytm.php');
	include('config.php');
	if(isset($_POST['checkout'])){
		$S = 0;
		$XXL = 0;
		$M = 0;
		$L = 0;
		$XL = 0;
		$orderid = uniqid();
		$name = $_POST['customername'];
		$email = $_POST['customeremail'];
		$phone = $_POST['customerphone'];
		$category = $_POST['category'];
		$sub_category = $_POST['subcategory'];
		$basic = (int)$_POST['basic'];
		$standard = (int)$_POST['standard'];
		$customerid = preg_replace('/\s+/', '', $name).$orderid;
		$amount = $basic * 250 + $standard * 350;
		for($i = 0;$i < $standard;$i++){
			$sz = $_POST['size-'.$i];
			switch($sz){
				case "XXL":
					$XS++;
					break;
				case "S":
					$S++;
					break;
				case "M":
					$M++;
					break;
				case "L":
					$L++;
					break;
				case "XL":
					$XL++;
					break;
			}
		}
		$usn = isset($_POST['usn']) ? $_POST['usn']:"";
		$department = isset($_POST['department']) ? $_POST['department']: "";
		$company = isset($_POST['company']) ? $_POST['company'] : "";
		$stringtohash = $orderid."/".merchantMid."@".$amount;
		$hashed = crypt($stringtohash, SALT);
		$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$query = "INSERT INTO payment_submit(order_id, name, email_id, phone_no, category, sub_category, usn, department, company, basic_ticket, standard_ticket, amount, S, M, L, XL, XXL) VALUES ('$orderid', '$name', '$email', '$phone', '$category', '$sub_category', '$usn', '$department', '$company', $basic, $standard, $amount, $S, $M, $L, $XL, $XXL)";
		mysqli_query($con, $query);
		$hashquery = "INSERT INTO hash_table(order_id, hash) VALUES ('$orderid', '$hashed')";
		mysqli_query($con, $hashquery);
		define("orderId", $orderid);
	    define("channelId", "WEB");
	    define("custId", $customerid);
	    define("mobileNo", $phone);
	    define("email", $email);
	    define("txnAmount",(string)$amount);
	    define("website", "WEBSTAGING");
	    define("industryTypeId", "Retail");
	    define("callbackUrl", "https://parichaymarathon.000webhostapp.com/callback.php");
	    $paytmChecksum = "";
	    $paytmParams = array();
	    $paytmParams["MID"] = merchantMid;
	    $paytmParams["ORDER_ID"] = $orderid;
	    $paytmParams["CUST_ID"] = $customerid;
	    $paytmParams["MOBILE_NO"] = $phone;
	    $paytmParams["EMAIL"] = $email;
	    $paytmParams["CHANNEL_ID"] = channelId;
	    $paytmParams["TXN_AMOUNT"] = $amount;
	    $paytmParams["WEBSITE"] = website;
	    $paytmParams["INDUSTRY_TYPE_ID"] = industryTypeId;
	    $paytmParams["CALLBACK_URL"] = callbackUrl;
	    $paytmParams["CALLBACK_URL"] = "http://localhost:8093/marathon%20website/callback";
	    $paytmChecksum = getChecksumFromArray($paytmParams, merchantKey);
	    $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
	}
/*
	$k5 = $_POST['basic'];
	$k10 = $_POST['standard'];
	$name = $_POST['customername'];
	$email = $_POST['customeremail'];
	$phone = $_POST['customerphone'];
	require_once('PaytmKit/lib/encdec_paytm.php');
	require_once('config.php');
    // Key in your staging and production MID available in your dashboard
    // Key in your staging and production merchant key available in your dashboard
    define("orderId", "order1");
    define("channelId", "WEB");
    define("custId", "cust123");
    define("mobileNo", "7777777777");
    define("email", "username@emailprovider.com");
    define("txnAmount", "100");
    define("website", "WEBSTAGING");
    // This is the staging value. Production value is available in your dashboard
    define("industryTypeId", "Retail");
    // This is the staging value. Production value is available in your dashboard
    define("callbackUrl", "https://parichaymarathon.000webhostapp.com/callback.php");
    $paytmParams = array();
    $paytmParams["MID"] = merchantMid;
    $paytmParams["ORDER_ID"] = orderId;
    $paytmParams["CUST_ID"] = custId;
    $paytmParams["MOBILE_NO"] = mobileNo;
    $paytmParams["EMAIL"] = email;
    $paytmParams["CHANNEL_ID"] = channelId;
    $paytmParams["TXN_AMOUNT"] = txnAmount;
    $paytmParams["WEBSITE"] = website;
    $paytmParams["INDUSTRY_TYPE_ID"] = industryTypeId;
    $paytmParams["CALLBACK_URL"] = callbackUrl;
    $paytmChecksum = getChecksumFromArray($paytmParams, merchantKey);
    $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";*/
?>

<html>
    <head>
        <title>Checkout Page</title>
    </head>
    <body>
        <center><h1>Please do not refresh this page...</h1></center>
        <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
            <?php
                foreach($paytmParams as $name => $value) {
                    echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
        </form>
        <script type="text/javascript">
        	<?php $_SESSION['making_payment'] = 1; ?>
            document.f1.submit();
        </script>
    </body>
</html>