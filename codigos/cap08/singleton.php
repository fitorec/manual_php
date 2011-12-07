<pre>
<?php
/*
 * patron singleton
 */
class BD 
{
	private $user;
	private $password;
	private $bd;
	public function __construct($user,$password,$bd)
	{	
		$this->user = $user;
		$this->password = $password;
		$this->bd = $bd;
		echo "Conexion a la BD ${bd} usuario {$user}\n";
	}
	
	public function __destruct()
	{	

	}
}

class Unico
{
	//protected 
	private static $singleton;
	private static $conexion;
	
	public function __construct()
	{	
		if( is_null(self::$singleton ) ){
			self::$singleton = true;
			self::$conexion = new BD('usuarioX','secret','base_datos');
		}else{
			echo "el recurso esta ocupado y disponible\n";
		}
	}
	
	public function __destruct()
	{	
	}
}
$unico  = new Unico();
$unico2 = new Unico();
$unico3 = new Unico();
$unico4 = new Unico();
#echo $unico::singleton;
#var_dump( Unico::singleton );

?>
</pre>
