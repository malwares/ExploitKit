<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Terms of Service</title>

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
			
			<h2>Terms of Service</h2>
			
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

      
                    
                    
                        <h2>&nbsp;</h2>
                    
                    

					
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
				
				<!--  / ABOUT BOX \ -->
				<div class="aboutBox">
				<h3><span>Terms of Service</span></h3>
				<p class="first"><strong>Donate</strong>: If you feel generous enough to donate to us, to make the booter stronger click the Donate tab ! -Thanks.</p>
                
</div>
					
				<p>
                
                
              <style type="text/css">
  p { line-height: 200%; }
</style>
<p></p>
              
              
              
              
     <p>&nbsp;</p>


      <b><font color="#0099f5"><font size="4"> Terms</font></font></b>
   </p>
			  <p>&nbsp;</p>
<p><strong>1</strong>. By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>
			  <p>&nbsp;</p>
			  <p> <b><font color="#0099f5"><font size="4">Use License</font></font></b>
              <p>&nbsp;</p>
			    </p>
				<p><strong>2.</strong> You may not distribute your license to anyone,if you are caught we will suspend your account 24-48 hours until notice.</p>
				<p> <strong>3.</strong> The following is not allowed to do with the booter and its content: </p>
				<p><strong>4.</strong> Modify or copy the materials. </p>
				<p><strong>5.</strong> Use the materials for any commercial purpose, or for any public display (commercial or non-commercial). </p>
				<p><strong>6.</strong> Remove any copyright or other proprietary notations from the materials. </p>
				<p><strong>7.</strong> We are not responsible how you use this booter,the program was meant to be used as a stress network tester. </p>
				<p><strong>8.</strong> Attacking the same IP Address repeatedly without pending 2 minutes between each boot will result in suspension of your account without refund.</p>
				<p><strong>9.</strong> Sharing your account will result in suspension without warning </p>
				<p><strong>10.</strong> All accounts can be revoked without refund if the TOS,and regulations are broken. </p>
				<p>&nbsp;</p>
				<p><b><font color="#0099f5"><font size="4">Disclaimer</font></font></b>
              
			  </p>
              <p>&nbsp;</p>
			  <p>By using DDoS Em booter you are responsible for what you are using it for. You have to stick with the laws from where you come from,remember you are responsible for your own actions and a reminder that post-booter is a stress testing networking tool.
		      </p>
			  <p>&nbsp;</p>
             <p><b><font color="#0099f5"><font size="4">Site TOS & Modifications</font></font></b>
            
			  </p>
                <p>&nbsp;</p>
				<p> DDoS Em Booter may revise these terms of use and change them at any time. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use. By breaking our Terms of Service you will get your account deleted without warning or refund. </p>
                
            
                
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


	         <?php
include 'footer1.php';
?>

	<!--  \ FOOTER CONTAINER / -->
		
</div>
<!--  \ WRAPPER / -->

</body>

</html>