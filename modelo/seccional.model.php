<?php /**
 *
 */
require_once 'conexion.php';

class SeccionalModel{
	static public function mdlMostrarSeccionales($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT seccional FROM $tabla GROUP BY seccional");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>