<?php

require_once '01.def_de_objeto.php';
/*define('CONSTANTE', 'valor de cosntante',true);
echo Constante;*/

class claseHerencia extends nombreClase 
{
	const CONSTANTE = 'Valor de mi constante';
	function mensaje2(){
		echo $this->propiedad;
	}
	function mensaje(){
		parent::funcion_mensaje();
	}
	public function __construct(){	

	}
	public function __destruct(){	
	}
}

$herencia = new claseHerencia();
$herencia->mensaje2();
$herencia->mensaje();
