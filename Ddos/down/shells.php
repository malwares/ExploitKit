<?php
include('dbc.php');

define("WIDTH", 360);
define("HEIGHT", 40);
define("NAME", "DDoS Em Booter");
$connect = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die();
$selectdb = mysql_select_db(DB_NAME, $connect) or die();
$shells = mysql_num_rows(mysql_query("SELECT * FROM `getshells`"));
$shells += mysql_num_rows(mysql_query("SELECT * FROM `postshells`"));
$shells += mysql_num_rows(mysql_query("SELECT * FROM `slowloris`"));
header("Content-type: image/png");
$picture = imagecreate(WIDTH, HEIGHT);
$black = imagecolorallocate($picture, 0, 0, 0);
imagecolortransparent($picture, $black);
$green = imagecolorallocate($picture, 0, 200, 0);
imagestring($picture, 10, 5, 10, NAME.' has '.$shells.' shells online.', $green);
imagepng($picture);
imagedestroy($picture);
?>