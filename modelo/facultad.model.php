<?php /**
 *
 */
require_once 'conexion.php';

class FacultadModel{
	static public function mdlMostrarFacultades($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT facultad FROM $tabla GROUP BY facultad");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>