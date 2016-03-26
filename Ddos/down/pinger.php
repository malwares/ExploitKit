<?php 
require("header.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Pinger</title>

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
		
			<h1><a href="index.php">Web Jet</a></h1>
			  
			<!-- / MENU CONTAINER \ -->
			<div id="menuCntr">
			
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="hub.php">DDoS Attack</a></li>
                                        <li><a href="cell.php">Cell</a></li>
					<li><a href="mysettings.php">My Account</a></li>
					<li><a href="pinger.php" class="active">Pinger</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				
			</div>
			<!-- \  MENU CONTAINER  /-->
			
		</div>
		<!--  \ HEADER CONTAINER / -->
			
		  <!--  / HAEDING BOX \ -->
		<div class="headingBox">
			<div class="heading">
			
			<h2>Pinger</h2>
			
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
								
                    
                    
                   





<div id="right">
<div class="small-box"><h2>Welcome, <?php echo $username; ?>!</h2>
    <div class="small-box-content">
        <p>
        Profile ID: <font color="#a5a5a5"><?php echo $id; ?></font> <br />
        Rank: <font color="#a5a5a5"><?php echo $level; ?></font> <br />
        My IP: <font color="#a5a5a5"><?php echo $_SERVER["REMOTE_ADDR"]; ?></font><br />
        My Attacks: <font color="#a5a5a5"><?php
    $query = mysql_query("SELECT * FROM `users` WHERE id='$id' ");
    while($row = mysql_fetch_array($query)){
    $attacks = $row['myAttacks'];
    echo $attacks;
    }
?></font>
        </p>

    </div></div>
<span style="line-height:1.4em;">
        <div class="small-box"><h2>Members Statistics</h2>
    <div class="small-box-content">
        <p>


                    <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="forms">
                        <font size=1>
          <tr>
            <td><font color="#575757">Total Users</font></td>
            <td><?php echo $all; ?></td></tr></font>
          

          <tr>
            <td><font color="#575757">Active Users</font></td>
            <td><?php echo $active; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">Pending Users</font></td>
            <td><?php echo $total_pending; ?></font></td>
          </tr>
          <tr>
            <td><font color="#575757">Total Attacks</font></td>
            <td><?php
                   $result = mysql_query("SELECT * FROM logs", $link);
                   $num_rows4 = mysql_num_rows($result);
                   echo "$num_rows4";
                ?></font></td>
          </tr>
                    </font>
                    </table>
                  
        </p>


    </div></div>

    <div class="small-box"><h2>Shells Statistics</h2>
    <div class="small-box-content">
        <p>


                    <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="forms">
                        <font size="1">
                                      <tr>
            <td><font color="#575757">Shell Rotation</font></td>
            <?php
            if($shellRotation == 0) { ?>
            <td><font color="red">(Off)</font></td>
            <?php } else { ?>
            <td><font color="#00bc00">(On)</font></td>
            <?php
            }
            ?>
           
          </tr>
         
          <tr>
            <td><font color="#575757">Shells Online</font></td>
            <td><font color="#00bc00"><?php echo $shellsOnline; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">GET Shells</font></td>
            <td><font color="#00bc00"><?php echo $num_rows; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">POST Shells</font></td>
            <td><font color="#00bc00"><?php echo $num_rows2; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">Slowloris Shells</font></td>
            <td><font color="#00bc00"><?php echo $num_rows3; ?></font></td>
          </tr>
         
                        </font>
                    </table>
        </p>


    </div></div>
    </span>
</div>

      
                    
                    
                    
                    
                    

					
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
                    <p>&nbsp;</p>
					<!--  / OUR BLOG BOX \ -->
				
			</div>
			<!--  \ LEFT CONTAINER / -->
			
			<!--  / RIGHT CONTAINER \ -->
			<div id="rightCntr">
				
				<!--  / TEXT BOX \ -->
				<div class="textBox">
				<h3 class="icon1"><span>Pinger</span></h3>
			<p class="first"><strong>Donate</strong>: If you feel generous enough to donate to us, to make the booter stronger click the Donate tab ! -Thanks.</p>
					
			
                
           
            
            
            
            
            
<?php

$ip = '';
if(isset($_POST['ipSubmit']))
 {
 $ip = $_POST['ipAddress']; //http://api.ipinfodb.com/v2/ip_query.php?key=b51d250de16ad508e76d1c3468ebfe91c503dc5a048bbc09147f94a633d79c8e&ip='.$ip.'&timezone=false
 }
else { // d8dc071351f3b1882b26d5b6820df28eaf2528a2746d78ea4fcbfbe5fe52089d     ('http://ipinfodb.com/ip_query.php?ip='.$ip.'&timezone=true')
 $ip = $_SERVER['REMOTE_ADDR'];
 }
$xml = simplexml_load_file('http://api.ipinfodb.com/v2/ip_query.php?key=d8dc071351f3b1882b26d5b6820df28eaf2528a2746d78ea4fcbfbe5fe52089d&ip='.$ip.'&timezone=true');

$ip = $xml->Ip;
$status = $xml->Status;
$country = $xml->CountryName;
$region = $xml->RegionName;
$city = $xml->City;
$latitude = $xml->Latitude;
$longitude = $xml->Longitude;
$timezone = $xml->TimezoneName;

?>


<div align="center">
<div align="center" style="width:470px;padding-top:20px;">
<form action="" method="post">
<label>Submit your IP :</label><input type="text" style="margin-left:10px;" value="<?php echo $ip; ?>" name="ipAddress" id="ipAddress"/>
<input type="submit" value="lookup" name="ipSubmit" />
</form>
<table width="50%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
 <tr>
 <td width="58%" style="padding-right:10px;"><div align="right">Your Ip:</div></td>
 <td width="42%"><?php echo $ip; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">Country :</div></td>
 <td><?php echo $country; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">Region :</div></td>
 <td><?php echo $region; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">City :</div></td>
 <td><?php echo $city; ?></td>
 </tr>
  <tr>
 <td style="padding-right:10px;"><div align="right">Latitude:</div></td>
 <td><?php echo $latitude; ?></td>
 </tr>
  <tr>
 <td style="padding-right:10px;"><div align="right">Longitude:</div></td>
 <td><?php echo $longitude; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">Timezone:</div></td>
 <td><?php echo $timezone; ?></td>
 </tr>
 <td style="padding-right:10px;"><div align="right">compiled by: </div></td>
 <td> Wifi </td>
 </tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">

</table>
</div>
</body>
</html>

            
            


            
            
            

  
    
<link rel="stylesheet" href="style1.css" type="text/css">
<br>
<div class="box-content">

 <center><h1>DDoS Em Booter Pinger</h1>


  <br><br>
    Pinger Down For Everyone Or Just Me  : <br>
   <iframe src="http://www.isup.me/" width="80%" height="200"> </iframe> 
   
  </center>
</div>

            
           					

 
            

         
			
                
                
                
				  </div>
				<!--  / TEXT BOX \ -->
                
                
                
                
                
                
                
                
				<!--  / PORTFOILIO BOX \ -->
				<div class="portfolioBox">
				
					<h3>Our Work
					
					<!--  / PORTFOILIO BOX \ -->
					
				  </div>
				<!--  / SERVECE BOX \ -->
				
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