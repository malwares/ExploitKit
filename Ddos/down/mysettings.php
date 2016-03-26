        <?php	
	if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "* Error - $e <br>";
	    }
	  echo "</div>";	
	   }
	   if(!empty($msg))  {
	    echo "<div class=\"msg\">" . $msg[0] . "</div>";

	   }
	  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>My Account</title>

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<meta name="keywords" content="" />	
	<meta name="description" content="" />
	<meta name="robots" content="" /><!-- change into index, follow -->
				
	<link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
	
	<!--[if lte IE 6]>
		<script type="text/javascript" src="javascripts/pngfix.js"></script>
		<script type="text/javascript" src="javascripts/ie6.js"></script>
		<link rel="stylesheet" href="stylesheets/ie6.css" type="text/css" />
	<![endif]-->

</head>

<body>

<!--  / WRAPPER \ -->
<div id="wrapper">
	
    <!--  / MAIN CONTAINER \ -->
    <div id="mainCntr">

		<!--  / HEADER CONTAINER \ -->
		<div id="headerCntr">
		
			<h1><a href="#">Web Jet</a></h1>
			  
			<!-- / MENU CONTAINER \ -->
			<div id="menuCntr">
			
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="hub.php">DDoS Attack</a></li>
                                        <li><a href="cell.php">Cell</a></li>
					<li><a href="mysettings.php" class="active">My Account</a></li>
					<li><a href="pinger.php">Pinger</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				
			</div>
			<!-- \  MENU CONTAINER  /-->
			
		</div>
		<!--  \ HEADER CONTAINER / -->
			
		  <!--  / HAEDING BOX \ -->
		<div class="headingBox">
			<div class="heading">
			
			<h2>My Account</h2>
			
			</div>
        </div>
		<!--  \ HAEDING BOX / -->
			  
       
		
        <!--  / CONTENT CONTAINER \ -->
        <div id="contentCntr" class="background">
			<div class="center">
			<!--  / LEFT CONTAINER \ -->
			<div id="leftCntr">
				
					<!--  / OUR BLOG BOX \ -->
					<div class="ourbloginnerBox">
						<div class="top">
							<div class="bottom">				
					<img src="images/get_icon.png" alt="" />		
					<h2>DDoS Em Booter</h2>
					<p>Welcome to Control Booter, here you can change the information of your account. Remember, multiple IP connection on the same account will result to an instant ban without a refund.</p>
					
							</div>
						</div>	 
					</div>
					<!--  / OUR BLOG BOX \ -->
					
					<!--  / OUR BLOG BOX \ -->
					<div class="ourbloginnerBox">
						<div class="top">
							<div class="bottom">
									
							<h2>Chat Member</h2>
							
							<object width="250" height="360" id="obj_1302316498383"><param name="movie" value="http://WiFiChatRoom.chatango.com/group"/><param name="AllowScriptAccess" VALUE="always"/><param name="AllowNetworking" VALUE="all"/><param name="AllowFullScreen" VALUE="true"/><param name="flashvars" value="cid=1302316498383&b=100&c=666666&d=666666&f=46&k=666666&l=000000&m=000000&s=1"/><embed id="emb_1302316498383" src="http://WiFiChatRoom.chatango.com/group" width="250" height="360" allowScriptAccess="always" allowNetworking="all" type="application/x-shockwave-flash" allowFullScreen="true" flashvars="cid=1302316498383&b=100&c=666666&d=666666&f=46&k=666666&l=000000&m=000000&s=1"></embed></object><br>
							
							</div>
						</div>	 
					</div>
					<!--  / OUR BLOG BOX \ -->
				
			</div>
			<!--  \ LEFT CONTAINER / -->
			
			<!--  / RIGHT CONTAINER \ -->
			<div id="rightCntr">
				
				<!--  / TEXT BOX \ -->
				<div class="textBox">
				<h3><span>Change your account information</span></h3>
				<p class="first">&nbsp;</p>
				<p class="first">
                
                
                
                
                <?php 
require("header.php");

$err = array();
$msg = array();

if($_POST['doUpdate'] == 'Update')  
{


$rs_pwd = mysql_query("select pwd from users where id='$_SESSION[user_id]'");
list($old) = mysql_fetch_row($rs_pwd);
$old_salt = substr($old,0,9);

//check for old password in md5 format
	if($old === PwdHash($_POST['pwd_old'],$old_salt))
	{
	$newsha1 = PwdHash($_POST['pwd_new']);
	mysql_query("update users set pwd='$newsha1' where id='$_SESSION[user_id]'");
	$msg[] = "Your new password is updated";
	//header("Location: mysettings.php?msg=Your new password is updated");
	} else
	{
	 $err[] = "Your old password is invalid";
	 //header("Location: mysettings.php?msg=Your old password is invalid");
	}

}

if($_POST['doSave'] == 'Save')  
{
// Filter POST data for harmful code (sanitize)
foreach($_POST as $key => $value) {
	$data[$key] = filter($value);
}


mysql_query("UPDATE users SET
			`full_name` = '$data[name]',
			`address` = '$data[address]',
			`tel` = '$data[tel]',
			`fax` = '$data[fax]',
			`country` = '$data[country]',
			`website` = '$data[web]'
			 WHERE id='$_SESSION[user_id]'
			") or die(mysql_error());

//header("Location: mysettings.php?msg=Profile Sucessfully saved");
$msg[] = "Profile Sucessfully saved";
 }
 
$rs_settings = mysql_query("select * from users where id='$_SESSION[user_id]'"); 
?>
<div class="box">
    <h2>My Account</h2>
    <div class="box-content">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>
  <script>
  $(document).ready(function(){
    $("#myform").validate();
	 $("#pform").validate();
  });
  </script>



<body>
      <p> 



      </p>
      <p>Here you can make changes to your profile. Please note that you will 
        not be able to change your email which has been already registered.</p>
      <p>&nbsp;</p>
      
      <link rel="stylesheet" href="style1.css" type="text/css">
      
	  <?php while ($row_settings = mysql_fetch_array($rs_settings)) {?>
      <form action="mysettings.php" method="post" name="myform" id="myform">
       <span style="line-height:2em;">
        <table width="90%" border="0" align="center" cellpadding="3" cellspacing="3" class="forms">
          <tr> 
            <td>Display Name</td>
            <td><input name="name" type="text" id="name"  class="required" value="<?php echo $row_settings['full_name']; ?>"></td>
          </tr>
          <tr> 
            <td>Country</td>
            <td><input name="country" type="text" id="country" value="<?php echo $row_settings['country']; ?>" > <select name="country" class="required" id="select8">
                <option value="" selected></option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Andorra">Andorra</option>
                <option value="Anguila">Anguila</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia ">Armenia </option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaidjan">Azerbaidjan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Brazil">Brazil</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmans Islands">Christmans Islands</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Estonia">Estonia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guyana">French Guyana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="Gabon">Gabon</option>
                <option value="Germany">Germany</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Georgia">Georgia</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guinea">Guinea</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati ">Kiribati </option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's 
                Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia ">Malaysia </option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marocco">Marocco</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldavia">Moldavia</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Niue">Niue</option>
                <option value="North Korea">North Korea</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru ">Peru </option>
                <option value="Philippines">Philippines</option>
                <option value="Poland">Poland</option>
                <option value="Portugal ">Portugal </option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Korea Reunion">Republic of Korea Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint kitts and nevis">Saint kitts and nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="St.Pierre and Miquelon">St.Pierre and Miquelon</option>
                <option value="St.Vincent and the Grenadines">St.Vincent and the 
                Grenadines</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Taiwan ">Taiwan </option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Thailand">Thailand</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Ukraine">Ukraine</option>
                <option value="UAE">UAE</option>
                <option value="UK">UK</option>
                <option value="USA">USA</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City">Vatican City</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (GB)">Virgin Islands (GB)</option>
                <option value="Virgin Islands (U.S.) ">Virgin Islands (U.S.) </option>
                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                <option value="Yemen">Yemen</option>
                <option value="Yugoslavia">Yugoslavia</option>
              </select></td>
         
         
       
         
         
          </tr>
          <tr> 
            <td width="27%">Phone</td>
            <td width="73%"><input name="tel" type="text" id="tel" class="required" value="<?php echo $row_settings['tel']; ?>"></td>
          </tr>
          <tr> 
            <td>Fax</td>
            <td><input name="fax" type="text" id="fax" value="<?php echo $row_settings['fax']; ?>"></td>
          </tr>
          <tr> 
            <td>Website</td>
            <td><input name="web" type="text" id="web" class="optional defaultInvalid url" value="<?php echo $row_settings['website']; ?>">
              <span class="example">Example: http://www.domain.com</span></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>User Name</td>
            <td><input name="user_name" type="text" id="web2" value="<?php echo $row_settings['user_name']; ?>" disabled></td>
          </tr>
          <tr> 
            <td>Email</td>
            <td><input name="user_email" type="text" id="web3"  value="<?php echo $row_settings['user_email']; ?>" disabled></td>
          </tr>
        </table>
        <p align="center"> 
          <input name="doSave" type="submit" id="doLogin4" value="Save">
        </p>
        </span>
      </form>
	  <?php } ?>
      
</div>
    </div>
       <p>&nbsp;</p>
       
       
<div class="box">      
      <h2>Change Password</h2>
      <div class="box-content">
      <p>If you want to change your password, please input your old and new password 
        to make changes.</p>
      <form name="pform" id="pform" method="post" action="">
        <span style="line-height:2em;">
        <table width="80%" border="0" align="center" cellpadding="3" cellspacing="3" class="forms">
          <tr> 
            <td width="31%">Old Password</td>
            <td width="69%"><input name="pwd_old" type="password" class="required password"  id="pwd_old"></td>
          </tr>
          <tr> 
            <td>New Password</td>
            <td><input name="pwd_new" type="password" id="pwd_new" class="required password"  ></td>
          </tr>
        </table>
      </span>
        
        <p align="center"> 
          <input name="doUpdate" type="submit" id="doLogin4" value="Update">
        </p>
      </form>

	   
      <p align="right"> </p></td>
    <td width="196" valign="top"></td>
  </tr>
  <tr> 
    <td colspan="3"></td>
  </tr>
</div>
    </div>  

</body>
</html>


<br>

      
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <!--  / TEXT BOX \ -->
				  <!--  / SERVECE BOX \ -->				</p>
				</div>

			<!--  \ RIGHT CONTAINER / -->  
			
        </div>
		</div>
        <!--  \ CONTENT CONTAINER / -->
		
	</div>
	<!--  \ MAIN CONTAINER / -->
	
	<!--  / FOOTER CONTAINER \ -->


	         <?php
include 'footer1.php';
?>


	<!--  \ FOOTER CONTAINER / -->
		
</div>
<!--  \ WRAPPER / -->

</body>

</html>