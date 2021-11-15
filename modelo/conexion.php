<?php
/**
 *
 */

class Conexion
{
	static public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=profesores","root","martin07081988");
		$link->exec("set names utf8");
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $link;
	}

}
