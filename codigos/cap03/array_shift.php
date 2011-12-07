<pre><?php
	$a = array();
	array_push($a,'hola','taller');
	array_push($a,'php');
	/*
	(
		[b] => hola
		[f] => taller
		[d] => php
	)
	*/
	while( count($a) )
		echo array_shift( $a ).' ';
	/*hola taller php*/
?>
</pre>
