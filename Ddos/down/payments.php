<?php
session_start();
include "dbc.php";
	if(!isset($_SESSION['user_id2']) || (trim($_SESSION['user_id2'])=='')) {
	//	header("location: index.php");
		exit();
}
$query = "SELECT * FROM users WHERE id={$_SESSION['user_id2']}";
$result = mysql_query($query);
$row = mysql_fetch_array($result, MYSQL_ASSOC);

$lastwut = $row['user_name'];
?>

     <!--  / Favicon \ -->	
       <link rel="icon" type="image/png" href="images/favicon1.png" />
     <!--  \ Favicon / -->

<html>
<head>
<title>Login Required</title>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="javascript/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/jquery.validate.js"></script>
  <script>
  $(document).ready(function(){
    $("#logForm").validate();
  });
  </script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="content"> 
<p><?php

	if(!empty($err))  {
	echo "<div class=\"msg\">";
	foreach ($err as $e) {
	    echo "$e <br>";
	}
	echo "</div>";	
	}  
	   
?></p>


<br>

		<header>
			Payments Page
		</header>

<div class="box-content">
   

<center>Please pay for your subscription below.</center>
<p>&nbsp;</p>
<p>&nbsp;</p>

<form action="login.php" method="post" name="logForm" id="logForm" >
  <label for="username">
  <p align="center"><a href='paypal.php'>PayPal</a><br>
      <br>
    </p>
  <p align="center">&nbsp; </p>
  </form>
</div>


</body>
</html>