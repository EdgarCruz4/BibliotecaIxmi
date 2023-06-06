


<?php

Class Conexion{
	public static function Conectar(){
		define('servidor','mysql5048.site4now.net');
		define('nombre_bd', 'db_a9a775_ixmi');
		define('usuario','a9a775_ixmi');
		define('password','@ud1t0r!a');

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