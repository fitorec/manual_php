<?

class conexion 
{
	private static $link;
	private $id = null;
	public function __construct($bd,$usuario,$pass)
	{	
		if( is_null( self::$link ) )
			self::$link = new PDO(
			sprintf( 'mysql:host=localhost;port=3306;dbname=%s;',$bd),
			$usuario,$pass
			);
	}
	/**
	 * Descripción de la función
	 *
	 * @param tipo $parametro1 descripción del párametro 1.
	 * @return tipo descripcion de lo que regresa
	 * @access publico/privado
	 * @link [URL de mayor infor]
	 */
	function leer($id=null) {
		if($id!==null )
			$this->
	}
	function consulta($consulta) {
		$q = self::$link->prepare($consulta);
		$q->execute();
		return $q->fetchAll();
	}
	
	public function __destruct()
	{	

	}
}

$con = new conexion('pruebas','root','libertad');
$consulta = $con->consulta('SELECT nick FROM usuarios WHERE 1');
var_dump($consulta);
