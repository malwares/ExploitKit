<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Logs</title>

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
					<li><a href="mysettings.php">My Account</a></li>
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
			
			<h2>Logs</h2>
			
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
								
                    
                    
                    
               <?php 
include "dbc.php";
page_protect();
include "includes/functions.php";
getBooterTitle();
?>





<div id="right">
<div class="small-box"><h2>Welcome, <?php echo $username; ?>!</h2>
    <div class="small-box-content">
        <p>
        Profile ID: <font color="#a5a5a5"><?php echo $id; ?></font> <br />
        Rank: <font color="#a5a5a5"><?php echo $level; ?></font> <br />
        My IP: <font color="#a5a5a5"><?php echo $_SERVER["REMOTE_ADDR"]; ?></font> <br />
        My Attacks: <font color="#a5a5a5"><?php
    $query = mysql_query("SELECT * FROM `users` WHERE id='$id' ");
    while($row = mysql_fetch_array($query)){
    $attacks = $row['myAttacks'];
    echo $attacks;
    }
?></font>
        </p>

    </div></div>

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
                    <h2>&nbsp;</h2>
					<!--  / OUR BLOG BOX \ -->
				
			</div>
			<!--  \ LEFT CONTAINER / -->
			
			<!--  / RIGHT CONTAINER \ -->
			<div id="rightCntr">
				
				<!--  / ABOUT BOX \ -->
				<div class="aboutBox">
				<h3><span>Logs</span></h3>
	
                
</div>
					
				<p>
                
                
              
              
              
              
              
              
           <?php


if(!checkAdmin()) {
die("<div class=\"box\">
    <h2>Administration Panel &bull; Access Denied</h2>
<div class=\"box-content\">
<p>You are not an administrator.</p>
</div></div>");
exit();
}

$query="SELECT * FROM logs ORDER BY DATE DESC";
$result=mysql_query($query);
$num=mysql_numrows($result);
?>

<div class="box">
    <h2>&nbsp;</h2>
    <h2>Attack Information</h2>
    <div class="box-content">
        <strong><center><img src="images/info.png"> <font color="white">Information:</font></strong> Newest attacks are shown at the top, most recent format.</center>
    </div>
</div>


<?php
$i=0;
while ($i < $num) {
    ?>

<div class="box">
    <h2>&nbsp;</h2>
    <h2>Recent Attacks</h2>
    <div class="box-content">
  <table border="0" width="100%" cellpadding="1" cellspacing="2">
<tr>
<td><center><font color="#212121"><strong>Username</strong></font></center></td>
<td><center><font color="#212121"><strong>DNS / IP</strong></font></center></td>
<td><center><font color="#212121"><strong>Duration</strong></font></center></td>
<td><center><font color="#212121"><strong>Port</strong></font></center></td>
<td><center><font color="#212121"><strong>Date</strong></font></center></td>

</tr>
</table>

    <?php

$f1=mysql_result($result,$i,"username");
$f2=mysql_result($result,$i,"ip");
$f3=mysql_result($result,$i,"time");
$f4=mysql_result($result,$i,"port");
$f5=mysql_result($result,$i,"date");

?>

<table>
<?php echo "<tr><td><center> $f1  |  </center></td><td><center> $f2  |  </center></td><td><center> $f3  |  </center></td><td><center> $f4  |  </center></td><td><center> $f5</center></td><tr/>"; ?>
</table>
</div>
</div>
<?php
$i++;
}
?>
</tr>
</table>
    <?php

if($i == 0) {
   ?>
<div class="box">
<h2>&nbsp;</h2>
<h2>No Logs Available</h2>
<div class="box-content">
<p>The logs are currently empty!</p>
</div>
</div>
   <?php
}

?>




              
              
              
              
              
                
                
                
              </p>
			  </div>
              
			  <!--  / ABOUT BOX \ -->
			  <!--  / MOTIVE BOX \ --><!--  / MOTIVE BOX \ -->
			  <!--  / MOTIVE BOX \ --><!--  / MOTIVE BOX \ -->
				
			</div>
			<!--  \ RIGHT CONTAINER / -->  
			
        </div>
		</div>
        <!--  \ CONTENT CONTAINER / -->
		
	</div>
	<!--  \ MAIN CONTAINER / -->
	
	<!--  / FOOTER CONTAINER \ -->
	<div id="footerCntr">
		<div id="footerCntrinner">
		
		
			
			<div class="left">
			<div class="imageBox">
			
			<a href="#"><img src="images/footer_icon1.jpg" alt="" /></a>
			<a href="#"><img src="images/footer_icon2.jpg" alt="" /></a>
			<a href="#"><img src="images/footer_icon3.jpg" alt="" /></a>
			<a href="#"><img src="images/footer_icon4.jpg" alt="" /></a> 
			
			</div>
			
			<p>&copy; Copyright . <a href="#">jeejeepower™.</a> All Rights Reserved</p>
			  
					<ul>
						<li class="first"><a href="index.php">Home</a></li>
						<li><a href="hub.php">Attack</a></li>
						<li><a href="mysettings.php">My Account</a></li>
						<li><a href="pinger.php">Pinger</a></li>
						<li><a href="logout.php">Logout</a></li>
                     
                     
						<?php  if (checkMod()) { 
                                        // Staff only links should go below here    
                                        ?>
                        <li><a href="staff.php">Staff CP</a></li>
                        
                                        <?php } ?>

					<?php  if (checkAdmin()) { 
                                        // Admin only links should go below here    
                                        ?>
                                                                
						<li><a href="manageshells.php">Shells</a></li>
                        <li><a href="addshell.php">Add Shells</a></li>
						<li><a href="logs.php">Logs</a></li>
						<li><a href="admin.php">Admin CP</a></li>
						
					
					<?php } ?>
					</ul>
					
			</div>
			<div class="right">
				<h2>Get in Touch</h2>
				<p>Feel free to contact me or please fill up below in the 
	following details and I will be in touch shortly.</p>
				<p>Address: 1758 Sample Road, Greenvalley, 12<br />
					Telephone: +123-1234-5678<br />
					FAX: +458-4578</p>
			
			</div>
		
		</div>
	</div>
	<!--  \ FOOTER CONTAINER / -->
		
</div>
<!--  \ WRAPPER / -->

</body>

</html>