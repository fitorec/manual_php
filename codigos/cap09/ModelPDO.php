<?
include_once 'config/basedatos.php';

abstract class Modelo
{
	private static $link;
	
	protected $data = null;
	public $id = null;
	#por defecto ocupara el campo defualt
	public $useDbConfig = 'default';
	
	public function __construct($id = null)
	{	
		if( !is_null($id) )
			$this->id = $id;
		if( is_null( self::$link ) ){
			$this->conexionBD();
		}
	}
	/**
	 * Descripción de la función
	 *
	 * @param tipo $parametro1 descripción del párametro 1.
	 * @return tipo descripcion de lo que regresa
	 * @access publico/privado
	 * @link [URL de mayor infor]
	 */
	public function conexionBD(){
		$bdConfig = new DATABASE_CONFIG;
		$bd = $bdConfig->{$this->useDbConfig}['nombre_base_datos'];
		$usuario = $bdConfig->{$this->useDbConfig}['usuario'];
		$password = $bdConfig->{$this->useDbConfig}['password'];
		self::$link = new PDO(
			sprintf( 'mysql:host=localhost;port=3306;dbname=%s;',$bd),
			$usuario,$password);
	}
	/**
	 * Descripción de la función
	 *
	 * @param tipo $parametro1 descripción del párametro 1.
	 * @return tipo descripcion de lo que regresa
	 * @access publico/privado
	 * @link [URL de mayor infor]
	 */
	function cargar_datos($id=null) {
		$result = false;
		if($id!==null )
			$thi->id = $id;
		if($thi->id !== null ){
			$consulta = self::$link->prepare(
			sprintf( "SELECT * FROM %s WHERE id='%d' LIMIT 1;", strtolower(get_class($this)), $thi->id)
			);
			$consulta->execute();
			$this->data = $consulta->fetchAll();
			#Eliminando los campos la clave es unica.
			if( count($this->data) == 1 ){
				$this->data = $this->data[0];
				foreach($this->data as $clave=>$valor){
					if( is_numeric( $clave ) )
						unset( $this->data[$clave] );
				}
			$result = true;
			}
		}
		return $result;
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

class Usuarios extends Modelo
{
	
}
/*class usuarios extends Modelo{
	
}*/
$usuarios = new Usuarios();
$usuarios->cargar_datos(1);
//'pruebas','root','libertad'
//$consulta = $con->consulta('SELECT nick FROM usuarios WHERE 1');
#var_dump($consulta);
