<?php /* Dans notre exemple, on affiche le résultat de l’appel à ipconfig */
$fp = popen('diskpart', 'r');
 echo nl2br(fread($fp,5000)); ?>
