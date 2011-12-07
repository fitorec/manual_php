<pre>
<?php
		$a = array();
		array_push($a,'hola');
		array_push($a,'taller');
		array_push($a,'php');
		print_r($a);
		/*
		(
			[b] => php
			[f] => taller
			[d] => hola
		)
		*/
		while( count($a) )
			echo array_pop( $a ).' ';
		/*hola taller php*/
?>
</pre>
