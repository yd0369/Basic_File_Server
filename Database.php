<?php

class Database {
	
	protected $pdo;
	protected static $instance;

	protected function __construct() 	{
		$this -> pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
	}

	public static function instance() {
		if(self::$instance === null) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function __call($method, $args) {
<<<<<<< HEAD
		call_user_func_array(array($this->pdo, $method), $args);
=======
		var_dump($method);
>>>>>>> d4980eb3cbec3ad4968e6772582f09a9aa618750
	}
}

?>