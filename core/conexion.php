<?php

class Conexion {
    private static $instancia;
	private $secure;
	
	// Declaramos las variables para la conexion de la base de datos 
	// todas las variables estan en private para una mayor seguridad de los datos 
	private $driver = DRIVER;
	private $host = HOST;
	private $namedb = NAME;
	private $userdbname = USER;
	private $Pass_sql = PASSWORD;
	private $charset = CHARSET;
	private $port = PORT;

	private function __construct() {
		try {

			// datos extras de la configuración del tipo de conexión a la base de datos
			// y como mostrar los errores y seleccion de idioma de la base de datos
			$options = array(
				PDO::ATTR_PERSISTENT => TRUE, 
				PDO::ATTR_EMULATE_PREPARES => TRUE,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES '".$this->charset."'"
			);

			// Creamos la conexion en PDO 
			$this->secure = new PDO($this->driver.':host='.$this->host.';port='.$this->port.';dbname='.$this->namedb,$this->userdbname, $this->Pass_sql, $options);
			$this->secure->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
			$this->secure->exec("SET CHARACTER SET ".$this->charset);
		} catch (PDOException $e) {
			print "¡Error de conexión!: " . $e->getMessage();
			die();
		}
	}
	// Función preparada mediante la cual se estaran ejecutando las consultas SQL
	public function prepare($sql) {
		return $this->secure->prepare($sql);
	}
	// Función que nos permitira extraer el ultimo id del ultimo registro realizado
	public function lastInsertId() {
		return $this->secure->lastInsertId();
	}
	public static function singleton() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}

?>