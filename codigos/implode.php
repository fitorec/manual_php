<?php
$errors=array();
#
$errors[]='Error número1';
#
$errors[]='Error número2';

if( count($errors) )
	echo implode("<br>", $errors);

?>
