<pre>
<?php
 $mi_arreglo = array( 
	'c1' =>'valor1',
	'c2' =>'valor2',
	'c3' =>'valor3');
/*foreach($mi_arreglo as $clave=>$valor):
	$mi_arreglo[$clave] = 'nuevo valor';
	echo "\t".$valor."\n";
endforeach;*/
reset($mi_arreglo);
while(key($mi_arreglo)){
	$mi_arreglo[key($mi_arreglo)] = 'nuevo valor';
	echo "\t".$mi_arreglo[key($mi_arreglo)]."\n";
	next($mi_arreglo);
}
print_r($mi_arreglo);
?>
</pre>
