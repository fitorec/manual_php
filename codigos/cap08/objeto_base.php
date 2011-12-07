<?php
/*
 * objeto que se mapea a la base de datos.
 */
class MapaModelo {
	var $id;
	var $tabla;
	
	public function __construct($tabla, $id=null){
		$this->id = $id;
		$this->tabla = $tabla;
	}
	public function leer(){
		if($this->id)
			echo "leer registro para $id";
	}
    public function __call($name, $valor) {
		// Nota: el valor $name es sensible a mayúsculas.
		/*if( strpos($name,'leer_valor_') === 0 ){
				return "leer valor del campo ".substr($name,11)."\n".
				sprintf("SELECT %s FROM %s WHERE %s.id = %d\n",
				substr($name,11), $this->tabla, $this->tabla, $this->id
				);
		}else*/
		if( strpos($name,'setear_valor_') === 0 ){
				return "setear valor {$valor} del campo ".substr($name,13)."\n";
		}
    }
    public function __get($campo)
	{
		return "leer valor del campo ".substr($name,11)."\n".
		sprintf("SELECT %s FROM %s WHERE %s.id = %d\n",
		$campo, $this->tabla, $this->tabla, $this->id);
	}
	
}

?>
<pre>
	<?php
	$user = new MapaModelo('users',5);
	echo $user->id;
	echo $user->password;
	echo $user->username;
	echo $user->setear_valor_email('fitorec@riseup.net');
	?>
</pre>
