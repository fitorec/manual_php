<?php
	$base = 'abcdefghi';
	$busqueda = 'de';
	if( strpos($base,$busqueda) !== false ){
		echo "cadena encontrada posicion ".strpos($base,$busqueda);
		
		echo '<br><b>Primera parte: </b>'.
				substr($base, 0,  strpos($base,$busqueda) );
				
		echo '<br><b>Parte final: </b>'.
			substr($base, strpos($base,$busqueda)+strlen($busqueda),
			strlen($base) - strpos($base,$busqueda)- strlen($busqueda)
			);
		//defghi
	}
?>
