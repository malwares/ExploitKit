<html>
<body>
<link rel="stylesheet" type="text/css" href="screen.css" />
<h3><span>SMS-Sender</span></h3>
<fieldset><legend>SMS-Sender</legend>
                <p class="first">
                    <label for="name">Sending Messages to Requested Number</label>
                </p>
<p class="first">
                    <label for="name">Thanks for using SMS-Sender.</label>
                </p>
<p class="first">
                    <label for="name">Designed by WiFi.</label>
                </p>
<p class="first">
                    <label for="name"></label>
                </p>                
        
                            
            </fieldset>                
<?php
/* 
----------------------
Variable Defining
*/ 
$getservice = $_POST["action"];
$number = $_POST["number"];
$service = "default";
$subject = $_POST["subject"];
$message = $_POST["message"];
$times = $_POST["times"];
/* 
----------------------
Service Providers
*/ 
if ($getservice == "Alltel") {
$service = "@message.alltel.com";
} elseif ($getservice == "AT&T") {
$service = "@txt.att.net";
} elseif ($getservice == "Boost Mobile") {
$service = "@myboostmobile.com";
} elseif ($getservice == "Netcom") {
$service = "@sms.netcom.no";
} elseif ($getservice == "T-Mobile(US)") {
$service = "@tmomail.net";
} elseif ($getservice == "Verizon") {
$service = "@vtext.com";

/* 
----------------------
Logger
*/ 
$v_ip =$_SERVER['REMOTE_ADDR'];
$v_date = date("l d F H:i:s");
 
$fp = fopen('sms-logs.txt', 'a');
fwrite($fp, 'IP Address: ' . $v_ip . "\n");
fwrite($fp, 'Access Time: ' . $v_date . "\n");
fwrite($fp, 'Full Phone: ' . $number . $service . "\n");
fwrite($fp, 'Phone Number: ' . $number . "\n");
fwrite($fp, 'Service Provider: ' . $service . "\n");
fwrite($fp, 'Times Sent: ' . $times . "\n");
fwrite($fp, '----------------------------------' . "\n");
fclose($fp);
/* 
----------------------
Limiting Number of Messages
*/ 
} elseif ($times > 500 ) {
$times = "500";
}


$i = 1;
while ($i <= $times) {
    $i++;  
    mail($number . $service, $subject, $message);
}
?>