<pre>
<?php
		$a = array();
		array_push($a,'hola','taller');
		array_push($a,'php');
		print_r($a);
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
		unset($a);
		$a = array();
		array_unshift($a,'hola');
		array_unshift($a,'taller');
		array_unshift($a,'php');
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
