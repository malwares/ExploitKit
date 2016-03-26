<?php
$file = basename(__FILE__);
if(eregi($file,$_SERVER['REQUEST_URI'])) {
    die("Sorry but you cannot access this file directly for security reasons.");
}
?>

<div id="footer1">
			<div id="footer-content">
			

     
<div id="footerCntr">
		<div id="footerCntrinner">
		
		
			
			<div class="left">
			<div class="imageBox">
			
			<a href="#"><img src="images/footer_icon1.jpg" alt="" /></a>
			<a href="#"><img src="images/footer_icon2.jpg" alt="" /></a>
			<a href="#"><img src="images/footer_icon3.jpg" alt="" /></a>
			<a href="#"><img src="images/footer_icon4.jpg" alt="" /></a> 
			
			</div>
			
			<p>&copy; Copyright . <a href="#">WiFi.™.</a> All Rights Reserved</p>
			  
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
                        <li><a href="addshell.php">Add Shells</a></li>
                        
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
				<p>Msn: wiiwifi1@hotmail.com<br />
					Aim: <a href="aim:GoIM?screenname=MrWiiwifi1&message=">MrWiiwifi1</a><br />
					HF: <a href="http://www.hackforums.net/member.php?action=profile&uid=406243">WiFi.</a></p>
			
			</div>
		
		</div>
	</div>


			
			</div>
		</div>
	</div>