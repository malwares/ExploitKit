<?php 
include "dbc.php";
page_protect();
include "includes/functions.php";
getBooterTitle();

$file = basename(__FILE__);
if(eregi($file,$_SERVER['REQUEST_URI'])) {
    die("Sorry but you cannot access this file directly for security reasons.");
}
?>


