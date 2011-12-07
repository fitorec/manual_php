<pre>
<?php
/*
 * Patron Registry
 */
class Registros
{
	//protected 
	private static $data;
	public function __construct()
	{
		if(is_null(self::$data) )
			self::$data = array();
	}
	function agregar($registro,$valor) {
		if(! array_key_exists($registro,self::$data)){
			self::$data[$registro] = $valor;
		}else{
			echo 'Registro existente '.self::$data[$registro]."\n";
		}
	}
	function mostrar_registros(){
		print_r(self::$data);
	}
	
}
$registro  = new Registros();
$registro->agregar('clave1','valor1');
$registro->agregar('clave2','valor2');

$registro2  = new Registros();
$registro2->agregar('clave3','valor3');
$registro2->agregar('clave1','Nuevo valor');
$registro2->mostrar_registros();

#echo $unico::singleton;
#var_dump( Unico::singleton );

?>
</pre>
