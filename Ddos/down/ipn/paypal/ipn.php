<?php
	include "../../dbc.php";
// read the post from PayPal system and add 'cmd'
	$req = 'cmd=_notify-validate';

	foreach ($_POST as $key => $value) 
	 {
		$value = urlencode(stripslashes($value));
		$req .= "&$key=$value";
	 }

// post back to PayPal system to validate
		$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
		$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
		$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);

// assign posted variables to local variables
		$item_name = $_POST['item_name'];
		$item_number = $_POST['item_number'];
		$payment_status = $_POST['payment_status'];
		$payment_amount = $_POST['mc_gross'];
		$payment_currency = $_POST['mc_currency'];
		$transaction_id = $_POST['txn_id'];
		$receiver_email = $_POST['receiver_email'];
		$payer_email = $_POST['payer_email'];
		$id = $_POST['custom']; // This is the ID from the user table we passed in the form

		$items = $_POST['item_number']; 
        $items = explode("|",$items);

        if (!$fp)
        {
         // HTTP ERROR
        } 
        else
        {
           fputs ($fp, $header . $req);
	     
		   // loop through the response from the server 
		   $info = array();
		   while (!feof($fp))
		   { 
			 $info[] = @fgets($fp, 1024); 
		   }
		 
		    //close fp - we are done with it 
		    fclose($fp);
		 
		    // join the results into a string separated by comma
		    $info = implode(",", $info);
		 
		    //check the ipn result received back from paypal
            if (eregi("VERIFIED", $info))
		 	 {
				if($payment_status == "Pending")
			 	{
					for($i=0; $i< count($item_number); $i++)
			  		{
						$insert = mysql_query("INSERT INTO `payments` SET username='".$id."', status='".$payment_status."', accountinfo='".$payer_email."', paymenttype='PayPal', transactionid='".$transaction_id."', price='".$payment_amount."', currency='".$payment_currency."', receiver_email='".$receiver_email."'");
						$message .= "INSERT INTO `payments` SET username='".$id."', status='".$payment_status."', accountinfo='".$payer_email."', paymenttype='PayPal', transactionid='".$transaction_id."', price='".$payment_amount."', currency='".$payment_currency."', receiver_email='".$receiver_email."'";	
						$insert = mysql_query("UPDATE users SET approved='1' WHERE user_name='$id'");
			  		}
				}
				elseif($payment_status == "Completed")
			 	{
					for($i=0; $i< count($item_number); $i++)
			  		{
						$insert = mysql_query("INSERT INTO `payments` SET username='".$id."', status='".$payment_status."', accountinfo='".$payer_email."', paymenttype='PayPal', transactionid='".$transaction_id."', price='".$payment_amount."', currency='".$payment_currency."', receiver_email='".$receiver_email."'");
						$message .= "INSERT INTO `payments` SET username='".$id."', status='".$payment_status."', accountinfo='".$payer_email."', paymenttype='PayPal', transactionid='".$transaction_id."', price='".$payment_amount."', currency='".$payment_currency."', receiver_email='".$receiver_email."'";	
						$insert = mysql_query("UPDATE users SET approved='1' WHERE user_name='$id'");
			  		}
				}
			 }

else if (strcmp ($info, "INVALID") == 0) {

				$insert = mysql_query("INSERT INTO `payments` SET username='".$id."'");
				$message .= "INSERT INTO `payments` SET username='".$id."'";		
}
}
?>
