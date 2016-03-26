<?php

include 'dbc.php';

foreach($_GET as $key => $value) {
	$get[$key] = filter($value);
}

$user = mysql_real_escape_string($get['user']);

if(isset($get['cmd']) && $get['cmd'] == 'check') {

if(!isUserID($user)) {
echo "Invalid User ID";
exit();
}

if(empty($user) && strlen($user) <=3) {
echo "Enter 5 chars or more";
exit();
}



$rs_duplicate = mysql_query("select count(*) as total from users where user_name='$user' ") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

	if ($total > 0)
	{
	echo "Not Available";
	} else {
	echo "Available";
	}
}

?>