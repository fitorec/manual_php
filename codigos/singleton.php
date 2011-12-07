<pre>
<?php
/*
 * patron singleton
 */
class BD 
{
	private var $user;
	private var $password;
	private var $bd;
	public function __construct($user,$password,$bd)
	{	
		$this->user = $user;
		$this->password = $password;
		$this->bd = $bd;
	}

	public function __destruct()
	{	

	}
}
class Unico
{
	//protected 
	static $_singleton;
	private static $conexion;
	
	public function __construct()
	{	
		
	}

	public function __destruct()
	{	
	}
}
#$unico = new Unico();
var_dump(Unico::_singleton);
?>
</pre>
