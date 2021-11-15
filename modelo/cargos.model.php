<?php
	require_once 'conexion.php';

	/**
	 *
	 */
	class CargosModel
	{

		static public function MdlMostrarCargos($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT cargo FROM $tabla GROUP BY cargo");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>