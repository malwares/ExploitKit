<?php 

include 'dbc.php';

$err = array();

foreach($_GET as $key => $value) {
	$get[$key] = filter($value); //get variables are filtered.
}

if ($_POST['doLogin']=='Login')
{

foreach($_POST as $key => $value) {
	$data[$key] = filter($value); // post variables are filtered
}


$user_email = $data['usr_email'];
$pass = $data['pwd'];


if (strpos($user_email,'@') === false) {
    $user_cond = "user_name='$user_email'";
} else {
      $user_cond = "user_email='$user_email'";
    
}

	
$result = mysql_query("SELECT `id`,`pwd`,`full_name`,`approved`,`user_level` FROM users WHERE 
           $user_cond
			AND `banned` = '0'
			") or die (mysql_error()); 
$num = mysql_num_rows($result);

  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	
	list($id,$pwd,$full_name,$approved,$user_level) = mysql_fetch_row($result);
	
	if(!$approved) {
	//$msg = urlencode("Account not activated. Please check your email for activation code");
	$err[] = "Account not activated. Please check your email for activation code";
	session_start();
	$_SESSION['user_id2']= $id;  
	header("Location: payments.php");
	//header("Location: login.php?msg=$msg");
	 //exit();
	 }
	 
		//check against salt
	if ($pwd === PwdHash($pass,substr($pwd,0,9))) { 
	if(empty($err)){			

     // this sets session and logs user in  
       session_start();
	   session_regenerate_id (true); //prevent against session fixation attacks.

	   // this sets variables in the session 
		$_SESSION['user_id']= $id;  
		$_SESSION['user_name'] = $full_name;
		$_SESSION['user_level'] = $user_level;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		
		//update the timestamp and key for cookie
		$stamp = time();
		$ckey = GenKey();
		mysql_query("update users set `ctime`='$stamp', `ckey` = '$ckey' where id='$id'") or die(mysql_error());
		
		//set a cookie 
		
	   if(isset($_POST['remember'])){
				  setcookie("user_id", $_SESSION['user_id'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_key", sha1($ckey), time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_name",$_SESSION['user_name'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				   }
		  header("Location: index.php");
		 }
		}
		else
		{
		//$msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
		$err[] = "You have supplied an invalid password for this username.";
		//header("Location: login.php?msg=$msg");
		}
	} else {
		$err[] = "The username provided does not exist in our database.";
	  }		
}
					 

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
			Login Page
		</header>

<div class="box-content">
   

<center>Login to your account below.</center>
<p>&nbsp;</p>
<p>&nbsp;</p>

<form action="login.php" method="post" name="logForm" id="logForm" >
<p align="left"><label for="username">Username</label></p> <input name="usr_email" type="text" class="required" id="hello" size="25"><br>

<p>&nbsp;</p>
<p>&nbsp;</p>

<p align="left"><label for="username">Password</label></p> <input name="pwd" type="password" class="required password" id="hello" size="25"><br><br>


<div id="buttons">

<input name="remember" type="checkbox" id="remember" value="1"> Remember Me</div><br>
<input name="doLogin" type="submit" id="doLogin3" value="Login">			
<input name="buttons"  id="reset" name="register.php" value="Register"onclick="self.location.href='register.php'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> 


</div>




<br />

Not registered? <a href="register.php">Click here</a> to register an account.
       
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
</div>


</body>
</html>