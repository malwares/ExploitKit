<?php
session_start();
include_once('includes/db.php');
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID'])=='')) {
		header("location: index.php");
		exit();
}
include('_active.php');

$query = "SELECT * FROM users WHERE id={$_SESSION['SESS_MEMBER_ID']}";
$result = mysql_query($query);
$row = mysql_fetch_array($result, MYSQL_ASSOC);

$lastwut = $row['lastactive'];
$staff = $row['staff'];
$time = time();
$timesince = $time - $lastwut;
$tosaccept = $row['terms'];

if ($tosaccept == 'yes'){
	exit();
}

if ($timesince > 1200){
	session_destroy();
	echo 'You are being automatically logged out due to inactivity. <META HTTP-EQUIV="Refresh" CONTENT="5; URL=index.php">';
	exit();
}
mysql_query("UPDATE users SET lastactive='$time' WHERE id={$_SESSION['SESS_MEMBER_ID']}");

if (isset($_POST['accept'])){
	mysql_query("UPDATE users SET terms='yes' WHERE id={$_SESSION['SESS_MEMBER_ID']}");
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=_boot.php">';
	exit();
}
?>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
<form name="termsofservice" action="" method="post">
<table height="100%" valign="middle" align="center">
	<tr>
		<td align="center" valign="bottom">
			In order to continue, you must accept the <a target="_blank" href="tos.html"><u>Terms of Service</u></a>
		</td>
	</tr>
	<tr>
		<td align="right" valign="top">
			<input type="submit" name="accept" class="button" value="I Accept">
		</td>
	</tr>
</table>
</form>