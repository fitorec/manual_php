<?php
class Connection
{
    protected $link;
    private $server, $username, $password, $db;
    
    public function __construct($server, $username, $password, $db)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->connect();
    }
    
    private function connect()
    {
        if( is_null( self::$link) ){
			$this->link = mysql_connect($this->server, $this->username, $this->password);
			mysql_select_db($this->db, $this->link);
		}
    }
    
    public function __sleep()
    {
        return array('server', 'username', 'password', 'db');
    }
    
    public function __wakeup()
    {
        $this->connect();
    }
}
$conexion = Connection('localhost','pruebas','pruebas','pruebas');
var_dump($conexion);
