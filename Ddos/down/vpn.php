<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>


	<title>VPN</title>

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
					<li><a href="hub.php" class="active">DDoS Attack</a></li>
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
			
			<h2>VPN</h2>
			
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
    
<span style="line-height:1.2em;">
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
</span> 

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
                    <p>&nbsp;</p>
					<!--  / OUR BLOG BOX \ -->
				
			</div>
			<!--  \ LEFT CONTAINER / -->
			
			<!--  / RIGHT CONTAINER \ -->
			<div id="rightCntr">
				
				<!--  / ABOUT BOX \ -->
				<div class="aboutBox">
				<h3><span>DDoS Attack</span></h3>
				<p class="first"><strong>Donate</strong>: If you feel generous enough to donate to us, to make the booter stronger click the Donate tab ! -Thanks.</p>
                
</div>
					
				<p>
                
                
                                          <div style="margin:20px; margin-top:5px"><div class="quotetitle"><b>Spoiler:</b> <input type="button" value="Afficher" style="width:45px;font-size:10px;margin:0px;padding:0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = '';        this.innerText = ''; this.value = 'Cacher'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Afficher'; }" /></div><div class="quotecontent"><div style="display: none;">{TEXT}</div></div></div>
              
              
              
                            <div style="margin:20px; margin-top:5px"><div class="quotetitle"><b>Spoiler:</b> <input type="button" value="Afficher" style="width:45px;font-size:10px;margin:0px;padding:0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = '';        this.innerText = ''; this.value = 'Cacher'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Afficher'; }" /></div><div class="quotecontent"><div style="display: none;">
                            
                            
                            
                            
                            
                             </td>
            <td width="430">&nbsp;</td>

          </tr>
          <tr>
            <td colspan="2"><span class="style14"><span class="style18">Connecting OSX </span><br />
              </span><span class="style16"><br />
<span class="style22"><u>Mac OS X 10.5 Leopard</u></span><br />
<br />
Mac OS X 10.5 leopard has changed and the Internet Connect application is not in the system anymore. To configure a VPN, the user has to go to the Network Preferences pane and create a connection with the button labeled '+' in the left lower corner, then select VPN and fill in the information on VPNReactor. Follow the steps below: <br />
<ol>
  <li>Click &quot;System Preferences&quot;<br />

<br />
<img src="images/osx/VPN-OSX-setup01.jpg" width="266" height="332" />
  </li><br /><br />
  <li>
  Select &quot;Network&quot;<br />
  <br />
  <img src="images/osx/VPN-OSX-setup02.jpg" width="665" height="559" /> </li>
  <br />

  <br />
<li>
Click on the plus symbol in the lower left corner to add a new connection. (Note: you may need to click the lock icon in the lower left to unlock the preference pane and make changes.)<br />
<br />
<img src="images/osx/VPN-OSX-setup03.jpg" width="667" height="575" />
<br />
<br />
</li><br />
<li>
Under "Interface" select "VPN".<br />
<br />
<img src="images/osx/VPN-OSX-setup04.jpg" width="668" height="577" />
<br />
<br />

</li><br />
<li>
Set the VPN Type: PPTP and Service Name: VPNReactor  and Click 'Create' <br />
<br />
<img src="images/osx/VPN-OSX-setup05.jpg" width="667" height="577" />
<br />
<br />
</li><br />
<li> The window will now show a place for the Server Address, and Account Name. Set Server Address: vpn.vpnreactor.com and type your VPNReactor username in the field Account Name. <br />
  <br />
  <img src="images/osx/VPN-OSX-setup06.jpg" width="663" height="575" />
</li>

<br />
<br />
<li> Click on "Authentication Settings" to set "Password"<br />
  <br />
  <img src="images/osx/VPN-OSX-setup07.jpg" width="666" height="577" /> <br />
  <br /> 
  </li>
<br />
<li> Enter your VPNReactor password in 'Password' field then Press "OK" and  Click  the checkbox for "Show VPN status in menu bar" (if desired) <br />

  <br />
  <img src="images/osx/VPN-OSX-setup08.jpg" width="664" height="575" />
  <br />
  <br />
</li>
<br />
<li>Click &quot;Advanced&quot;<br />
  <br />
  <img src="images/osx/VPN-OSX-setup09.jpg" width="667" height="574" /> <br />

  <br />
  <br />
  </li>
<li>Click &quot;Options&quot; tab and check &quot;Send all traffic over VPN connection&quot; <br />
  <br />
  <img src="images/osx/VPN-OSX-setup10.jpg" width="658" height="557" />

  <br />
  <br />
  <br />
</li>
<li>Now click &quot;TCP/IP&quot; tab and set IPv6 to &quot;OFF&quot;, then OK <br />
  <br />
  <img src="images/osx/VPN-OSX-setup11.jpg" width="663" height="575" />

  <br />
  <br />
  <br />
</li>
<li>Click "Apply" in the lower right corner.<br />
        <br />
        <img src="images/osx/VPN-OSX-setup12.jpg" width="662" height="571" />
        <br />
        <br />

</li>
<br />
<li>To use VPNReactor, Click "Connect VPNReactor "<br />
  <br />
  <img src="images/osx/VPN-OSX-setup13.jpg" width="261" height="195" />
</li>
</ol>
<br />
<span class="style23">Note:</span> Make sure that "Send all traffic over VPN connection" is checked in the settings for VPNReactor.
<br />
<br /><br />
            </span>

                            
                            
                            
                            
                            
                            
                            
                            </div></div></div>
                            
                            
              
              <div style="margin:20px; margin-top:5px"><div class="quotetitle"><b>Spoiler:</b> <input type="button" value="Afficher" style="width:45px;font-size:10px;margin:0px;padding:0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = '';        this.innerText = ''; this.value = 'Cacher'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Afficher'; }" /></div><div class="quotecontent"><div style="display: none;">
              
              
              
                    </td>
            <td width="430">&nbsp;</td>

          </tr>
          <tr>
            <td colspan="2"><span class="style14"><span class="style18">Connecting Window 7 </span><br />
              <br />
            </span><span class="style16">Follow these simple steps to install VPNReactor on your computer using the PPTP protocol.

(This instruction applies to the operating system Microsoft Windows 7).
<br />
           
<ol>
  <li>
Click &quot;Start&quot; menu<br />

<br />
<img src="images/win7/win7-setup01.jpg" width="600" height="491" /><br />
<br />
  </li><br />
<li>Select &quot;Computer&quot; <br />
<br />
<img src="images/win7/win7-setup02.jpg" width="422" height="533" />
<br />
<br />
</li><br />
<li>Right click &quot;Network&quot; on the left hand side  and Select 'Properties' <br />

<br />
<img src="images/win7/win7-setup03.jpg" width="600" height="456" />
<br />
<br />
</li><br />
<li> Click &quot;Setup a new connection or network&quot;
<br />
<br />
<img src="images/win7/win7-setup04.jpg" width="600" height="448" />
<br />
<br />
</li><br />
<li> Select &quot;Connect to a workplace&quot; and click 'Next'

<br />
<br />
<img src="images/win7/win7-setup05.jpg" width="616" height="387" />
<br />
<br />
</li><br />
<li>Click &quot;Use my Internet connection (VPN)&quot; <br />
<br />
<img src="images/win7/win7-setup06.jpg" width="622" height="448" />
<br />
<br />
</li>
<li>Type in the Internet address: vpn.vpnreactor.com and Destination name: VPNReactor <br />

<br />
<img src="images/win7/win7-setup07.jpg" width="613" height="450" />
<br />
<br />
</li><br />
<li> Enter your VPNReactor username and password in 'Username' and 'Password' field and click &quot;Connect&quot; <br />
<br />
<img src="images/win7/win7-setup08.jpg" width="622" height="453" />
<br />
<br />
</li><br />
<li>Now you are connected to VPNReactor.<br />

<br />
<img src="images/win7/win7-setup09.jpg" width="615" height="443" />
<br />
<br />
</li><br />
<li> Once connected go to vpnreactor.com to verify that your connection is now secure. <br />
<br />
<img src="images/win7/win7-setup010.jpg" width="381" height="251" />
<br />
<br />
</li><br />
<li> To disconnect the VPN click the little computer in right side of your taskbar and click 'Disconnect' <br />
<br />

<img src="images/win7/win7-setup011.jpg" width="299" height="455" />
</li>
</ol>

<br /><br /><br />
            </span>
              
              
              
              </div></div></div>
              
              
              <div style="margin:20px; margin-top:5px"><div class="quotetitle"><b>Spoiler:</b> <input type="button" value="Afficher" style="width:45px;font-size:10px;margin:0px;padding:0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = '';        this.innerText = ''; this.value = 'Cacher'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Afficher'; }" /></div><div class="quotecontent"><div style="display: none;">
              
              
              
              
              
              
          
              
              
               <tr>
            <td colspan="2"><span class="style14"><span class="style18">Connecting XP using the PPTP protocol </span><br />
              <br />
            </span><span class="style16">Follow these simple steps to install VPNReactor on your computer using the PPTP protocol.
(This instruction applies to the operative system Microsoft Windows XP).
            <br />
            <br />
           
<ol>
  <li>

Choose Start &gt; Connect To &gt; Show All Connections<br />
<br />
<img src="images/winxp/1.jpg" /> </li>
  <br /><br />

<li>
Click on "Create a new connection" on the left hand side<br /><br />
<img src="images/winxp/2.jpg" /></li>
<br />

<br />

<li>
Choose "Connect to the network at my workplace" and click "Next".<br />
<br />
<img src="images/winxp/3.jpg" /></li><br /><br />

<li>
Choose "Virtual Private Network connection" and click "Next"
<br />
<br />
<img src="images/winxp/4.jpg" /></li><br /><br />

<li>
Enter a name for the VPN connection (e.g. "VPNReactor") and click "Next".
<br />

<br />
<img src="images/winxp/5.jpg" /></li><br /><br />

<li>
If you don't need to dial up to the Internet before you can connect to VPNReactor, Choose "Do not dial the initial connection".
<br />
<br />
<img src="images/winxp/6.jpg" /></li><br /><br />

<li>
Enter "vpn.vpnreactor.com" as the VPN server host name and click "Next".
<br />
<br />
<img src="images/winxp/7.jpg" /></li><br /><br />

<li>
Check "Add a shortcut to this connection to my desktop" if desired, then click "Finish".

<br />
<br />
<img src="images/winxp/8.jpg" /></li><br /><br />

<li>
You should now disable "File and Printer Sharing" as it can pose as a security issue. Open the newly created VPNReactor connection and click "Properties". Click on the "Networking" tab, uncheck the "File and Printer Sharing for Microsoft Networks" and Click Ok.<br />
<br /><img src="images/winxp/9.jpg" />
</li><br /><br />
<li>To use VPNReactor, Enter your VPNReactor user name and password and click "Connect". </li>
</ol>

<br /><br />
              
              
                </span>
              
              
              
              
              
              
              
              </div></div></div>
              

              
              
  
                
                
                </p>
				</div>
              
				<!--  / ABOUT BOX \ -->
				
				
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