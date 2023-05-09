


<?php

Class Conexion{
	public static function Conectar(){
		define('servidor','MYSQL5045.site4now.net');
		define('nombre_bd', 'db_a96468_audit');
		define('usuario','a96468_audit');
		define('password','Aud1t0r1@');

		$opciones =array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

	try{
		$conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd,usuario,password,$opciones);
		return $conexion;


	}catch (Exception $e){
		die("El error de conexion es: ".$e->getMessage());
	}

	}
}

?>