<?php
include("config.php");
$dbservertype='mysql';

connecttodb($host,$dbname,$dbuser,$dbpwd);

function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
  global $link;
  $link=mysql_connect ("$servername","$dbuser","$dbpassword");
  if(!$link){die("Could not connect to MySQL");}
   mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());
}


if( !function_exists('apache_request_headers') ) {
function apache_request_headers()
{
    $headers = array();
    foreach ($_SERVER as $k => $v)
    {
        if (substr($k, 0, 5) == "HTTP_")
        {
            $k = str_replace('_', ' ', substr($k, 5));
            $k = str_replace(' ', '-', ucwords(strtolower($k)));
            $headers[$k] = $v;
        }
    }
    return $headers;
}
}
?>