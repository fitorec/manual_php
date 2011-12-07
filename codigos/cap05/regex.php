<?php
	$a = array(
		'5a9',
		'346',
		'a5b',
		'64b');
	foreach ($a as $v) 
	{
		if( preg_match('%^[0-9]%',$v))
			echo $v."\n";
	}
?>
