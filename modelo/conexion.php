<?php 

/**
 * 
 */
class Conexion {
	
	static public function conectar(){
		$link= new PDO("mysql:host=; dbname=profesores","root","vidalgcarlos");
		$link->exec("set names utf8");
		$link->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $link;
	}
}
 ?>