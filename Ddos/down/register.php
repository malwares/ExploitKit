<?php 
include 'dbc.php';

$err = array();
					 
if($_POST['doRegister'] == 'Register') 
{ 

foreach($_POST as $key => $value) {
	$data[$key] = filter($value);
}


if(empty($data['full_name']) || strlen($data['full_name']) < 4)
{
$err[] = "ERROR - Invalid name. Please enter atleast 3 or more characters for your name";
}


if (!isUserID($data['user_name'])) {
$err[] = "ERROR - Invalid user name. It can contain alphabet, number and underscore.";
}
if(!isEmail($data['usr_email'])) {
$err[] = "ERROR - Invalid email address.";
}
if (!checkPwd($data['pwd'],$data['pwd2'])) {
$err[] = "ERROR - Invalid Password or mismatch. Enter 5 chars or more";
}
	  
$user_ip = $_SERVER['REMOTE_ADDR'];
$date = date("m-d-Y, h:i:s a", time());

$sha1pass = PwdHash($data['pwd']);

$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$activ_code = rand(1000,9999);

$usr_email = $data['usr_email'];
$user_name = $data['user_name'];

$rs_duplicate = mysql_query("select count(*) as total from users where user_email='$usr_email' OR user_name='$user_name'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The username/email already exists. Please try again with different username and email.";

}


if(empty($err)) {
$sql_insert = "INSERT into `users`(`full_name`,`user_email`,`pwd`,`address`,`tel`,`fax`,`website`,`date`,`users_ip`,`activation_code`,`country`,`user_name`) VALUES ('$data[full_name]','$usr_email','$sha1pass','$data[address]','$data[tel]','$data[fax]','$data[web]','$date','$user_ip','$activ_code','$data[country]','$user_name')";
			
mysql_query($sql_insert,$link) or die("Insertion Failed:" . mysql_error());
$user_id = mysql_insert_id($link);  
$md5_id = md5($user_id);
mysql_query("update users set md5_id='$md5_id' where id='$user_id'");
//	echo "<h3>Thank You</h3> We received your submission.";

if($user_registration)  {
$a_link = "
*****ACTIVATION LINK*****\n
http://$host$path/activate.php?user=$md5_id&activ_code=$activ_code
"; 
} else {
$a_link = 
"Your account is *PENDING APPROVAL* and will be soon activated the administrator.
";
}

  header("Location: thankyou.php");  
  exit();
	 
	 } 
 }					 

?>

<html>
<head>

     <!--  / Favicon \ -->
       <link rel="icon" type="image/png" href="images/favicon1.png" />
     <!--  \ Favicon / -->

<title>You Booter Registration/Signup Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="javascript/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/jquery.validate.js"></script>

  <script>
  $(document).ready(function(){
    $.validator.addMethod("username", function(value, element) {
        return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
    }, "Username must contain only letters, numbers, or underscore.");

    $("#regForm").validate();
  });
  </script>

<link href="style3.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>

      <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>
	</p>
      <h3 class="titlehdr">Free Registration / Signup</h3>
      <p>Please register a free account, before you can start posting your ads. 
        Registration is quick and free! Please note that fields marked <span class="required">*</span> 
        are required.</p>
	  
	 
	  <br>

      <form action="register.php" method="post" name="regForm" id="regForm" >
	   <div class="register-box">
       <h2>Register</h2>
       <div class="box-content">
	   
        <table width="95%" border="0" cellpadding="3" cellspacing="3" class="forms">
          <tr> 
            <td colspan="2">Your first name<span class="required"><font color="#CC0000">*</font></span><br> 
              <input name="full_name" type="text" id="full_name" size="40" class="required"></td>

          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
  
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="2"><h4><strong>Login Details</strong></h4></td>
          </tr>

          <tr> 
            <td>Username<span class="required"><font color="#CC0000">*</font></span></td>
            <td><input name="user_name" type="text" id="user_name" class="required username" minlength="5" > 
              <input name="btnAvailable" type="button" id="btnAvailable" 
			  onclick='$("#checkid").html("Please wait..."); $.get("checkuser.php",{ cmd: "check", user: $("#user_name").val() } ,function(data){  $("#checkid").html(data); });'
			  value="Check Availability"> 
			    <span style="color:red; font: bold 12px verdana; " id="checkid" ></span> 
            </td>
          </tr>
          <tr> 
            <td>Your Email<span class="required"><font color="#CC0000">*</font></span> 
            </td>

            <td><input name="usr_email" type="text" id="usr_email3" class="required email"> 
              <span class="example">** Valid email please..</span></td>
          </tr>
          <tr> 
            <td>Password<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="pwd" type="password" class="required password" minlength="5" id="pwd"> 
              <span class="example">** 5 chars minimum..</span></td>
          </tr>

          <tr> 
            <td>Retype Password<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="pwd2"  id="pwd2" class="required password" type="password" minlength="5" equalto="#pwd"></td>
          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
          </tr>

        </table>
        </div>
        </div>
		
        <p align="center">
          <input name="doRegister" type="submit" id="doRegister" value="Register">
        </p>
      </form>


	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

</body>
</html>


