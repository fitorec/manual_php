<pre>
<?php
/**
 * Uso del array_walk
 */
function pot2(&$valor,&$clave) {
	$valor=$valor*$valor;
}
	$numeros=array(1,2,3,4,5);
	#$numeros=range(5,1);
	array_walk($numeros,'pot2');
	print_r($numeros);

?>
</pre>
