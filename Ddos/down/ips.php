    <?php
    $logfile= 'Booter/log.txt';
    $IP = $_SERVER['REMOTE_ADDR'];
    $logdetails=  date("F j, Y, g:i a") . ': ' . $_SERVER['REMOTE_ADDR'];
    $fp = fopen($logfile, "a");
    fwrite($fp, $logdetails);
    fwrite($fp, "\r\n");
    fclose($fp);
    ?>   
<a href="www.bluewaffle.net"><img src="http://img3.visualizeus.com/thumbs/08/07/04/lmao,lol,rotfl,icanhazcheeseburger,lolz-ae0ae4cb09a55b3cc6522e146b25b4a4_h.jpg" alt="Angry face" />
<a href="www.nobrain.dk"><img src="http://www.wtfcostumes.com/costumes/alien_chest_burst_baby.jpg" alt="Angry face" /> </a>
