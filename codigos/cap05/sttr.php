<?php
$msg = 'canción';
echo '<h4>La cadena "'.$msg.'" Mide '.strlen($msg).'</h4>';
$busados=array('á','é','í','ó','ú');
$remplazar=array('a','e','i','o','u');
$msg = str_replace($busados,$remplazar,$msg);
#$msg=strtr($msg,'áéíóú','aeiou');
echo '<h4>La cadena "'.$msg.'" Mide '.strlen($msg).'</h4>';


?>
