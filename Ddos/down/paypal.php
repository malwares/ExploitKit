<?php
session_start();
include "dbc.php";
	if(!isset($_SESSION['user_id2']) || (trim($_SESSION['user_id2'])=='')) {
		header("location: index.php");
		exit();
}
$query = "SELECT * FROM users WHERE id={$_SESSION['user_id2']}";
$result = mysql_query($query);
$row = mysql_fetch_array($result, MYSQL_ASSOC);

$lastwut = $row['user_name'];
	
#Paypal Configuration
	$ppTest = false; // Set to False for Live integration
	$ppDebug = false;
	if ($ppTest) {
	#Sandbox URL
		$paypalUrl="https://www.sandbox.paypal.com/us/cgi-bin/webscr";
	#Sandbox Paypal ID
		$paypalID='SANDBOXPAYPALEMAILHERE';
	} else {
	#Live URL
		$paypalUrl="https://www.paypal.com/cgi-bin/webscr";
	#Paypal ID - Change to your Paypal Payment Address
		$paypalID='sultanj@missouri.edu';
	}
	#Site URL
	$siteUrl="http://ddosem.com";
	
	#Description
	$paypaldescription='DDoS Em Booter Subscription';
	
	#Monthly Subscription price
	$monthlyprice='$15';
	
	#Currency Code
	$paypalCurrency='USD';
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: redirecting to PayPal ::</title>
</head>

<?php if ($ppDebug) { ?>
<body>
<?php } else { ?>
<body onload="JavaScript: document._xclick.submit();">
<?php } ?>
<table border="0" align="center">

<tr><td align="center"><h1>Please Wait...while we redirect to PayPal.com</h1></td></tr>
<tr><td align="center"></td></tr>
</table>
<form action="<?=$paypalUrl?>" method="post" name="_xclick"/>
    <!-- This needs to be _xclick-subscriptions for the Subscriptions to work -->
    <input type="hidden" name="cmd" value="_xclick"/>
    <!-- This is your PayPal Email Address -->
    <input type="hidden" name="business" value="<?=$paypalID?>"/> 
    <!-- This is the Item Name which is pulled from the Database based on the form selection -->
    <input type="hidden" name="item_name" value="<?=$paypaldescription?>" />
    <input type="hidden" name="amount" value="<?=$monthlyprice?>">
    <!-- This is the Item Number that was selected. This should probably be something other than '1' for bookkeeping purpose -->
    <input type="hidden" name="item_number" value="1"/>
    <!-- This disables Shipping -->
    <input type="hidden" name="no_shipping" value="1"/>
    <!-- This identifies the currency -->
    <input type="hidden" name="currency_code" value="<?=$paypalCurrency;?>"/>
    <!-- This is the Subscription Price -->
    <input type="hidden" name="a3" value="<?=$monthlyprice;?>"/>
    <!-- This is the Subscription Duration -->
    <input type="hidden" name="p3" value="<?=$duration;?>"/>
    <!-- This is the Subscription Period -->
    <input type="hidden" name="t3" value="M"/>
    <!-- This enables Recurring Payments -->
    <input type="hidden" name="src" value="1"/>
    <!-- This is Reattempts on Recurring Payment on Failure before Cancelling -->
    <input type="hidden" name="sra" value="1"/>
    <!-- This is the return method  -->
    <input type="hidden" name="rm" value="2"/>
    <!-- This is the URL to return to your Site from PayPal when successfully Processed -->
    <INPUT type="hidden" name="return" value="<?=$siteUrl?>thankyoup.php"/>   
    <!-- This is the URL to return to your Site from PayPal when they cancel the checkout Process -->
    <INPUT type="hidden" name="cancel_return" value="<?=$siteUrl?>cancel.php"/> 
    <!-- This is the URL to your Site to handle IPN -->
    <input type="hidden" name="notify_url" value="<?=$siteUrl?>/ipn/paypal/ipn.php" />
	<!-- This is the No Note option -->
	<input type="hidden" name="no_note" value="1">
    <!-- This is a custom field used to pass the ID from the user table -->
    <input type="hidden" name="custom" value="<?=$lastwut;?>">

</form>

</body>
</html>
<?php 

?>