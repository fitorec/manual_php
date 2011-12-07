<h2><?php
$a='hola';
function cambio($v){
	$v = 'adios';
}

function cambio2(&$v){
	$v = 'adios';
}
cambio2($a);
echo $a;
?>
</h2>
