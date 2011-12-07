<pre>
<?php
/*
 * Patron Factory
 */
class BD{
	function mensaje(){ echo "\nfuncion de prueba\n";	}
}
class Modelo{}
class Controlador{}
class Fabrica
{
	//protected 
	private static $data;
	public function __construct()
	{
		if(is_null(self::$data) )
			self::$data = array();
	}
	
	function agregar($objeto) {
		if(! array_key_exists($objeto, self::$data) ){
			self::$data[ $objeto ] = new $objeto();
			var_dump(self::$data[$objeto]);
		}else{
			echo "El objeto {$objeto} ya es existente \n";
			var_dump(self::$data[$objeto]);
		}
	}
	
	function __get($objeto){
		if(! array_key_exists($objeto,self::$data)){
			return self::$data[$objeto];
		}else
			return null;
	}
	
}
$fabrica = new Fabrica();
$fabrica->agregar('BD');
$fabrica->agregar('Controlador');

$fabrica2  = new Fabrica();
$fabrica2->agregar('Modelo');
//genera un error
$fabrica2->agregar('Controlador');

var_dump( $fabrica2->Modelo );
#$fabrica2->BD->mensaje();

#echo $unico::singleton;
#var_dump( Unico::singleton );

?>
</pre>
