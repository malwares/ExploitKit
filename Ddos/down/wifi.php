<!--
PHP IP Lookup.
Author : Anoop S Achari
My web : http://www.achari.in
-->

<?php

$ip = '';
if(isset($_POST['ipSubmit']))
 {
 $ip = $_POST['ipAddress']; //http://api.ipinfodb.com/v2/ip_query.php?key=b51d250de16ad508e76d1c3468ebfe91c503dc5a048bbc09147f94a633d79c8e&ip='.$ip.'&timezone=false
 }
else { // d8dc071351f3b1882b26d5b6820df28eaf2528a2746d78ea4fcbfbe5fe52089d     ('http://ipinfodb.com/ip_query.php?ip='.$ip.'&timezone=true')
 $ip = $_SERVER['REMOTE_ADDR'];
 }
$xml = simplexml_load_file('http://api.ipinfodb.com/v2/ip_query.php?key=d8dc071351f3b1882b26d5b6820df28eaf2528a2746d78ea4fcbfbe5fe52089d&ip='.$ip.'&timezone=true');

$ip = $xml->Ip;
$status = $xml->Status;
$country = $xml->CountryName;
$region = $xml->RegionName;
$city = $xml->City;
$latitude = $xml->Latitude;
$longitude = $xml->Longitude;
$timezone = $xml->TimezoneName;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<div align="center">
<div align="center" style="width:470px;padding-top:20px;">
<form action="" method="post">
<label>Submit your IP :</label><input type="text" style="margin-left:10px;" value="<?php echo $ip; ?>" name="ipAddress" id="ipAddress"/>
<input type="submit" value="lookup" name="ipSubmit" />
</form>
<table width="50%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
 <tr>
 <td width="58%" style="padding-right:10px;"><div align="right">Your Ip:</div></td>
 <td width="42%"><?php echo $ip; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">Country :</div></td>
 <td><?php echo $country; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">Region :</div></td>
 <td><?php echo $region; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">City :</div></td>
 <td><?php echo $city; ?></td>
 </tr>
 <tr>
 <td style="padding-right:10px;"><div align="right">Timezone:</div></td>
 <td><?php echo $timezone; ?></td>
 </tr>
 <td style="padding-right:10px;"><div align="right">compiled by: </div></td>
 <td> nrd </td>
 </tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">

</table>
</div>
</body>
</html>
