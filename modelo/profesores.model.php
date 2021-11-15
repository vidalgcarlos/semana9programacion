<?php
	require_once 'conexion.php';

	/**
	 *
	 */
	class ProfesorModel	{
		static public function mdlCrearProfesor($tabla, $datos){
			try {
				$stmt = Conexion::conectar()->prepare("");
				$stmt->execute();
			} catch (PDOException $e) {
				$error  = $e->getMessage();
			}
			$stmt = null;
			if (isset($error)) {
				return $error;
			} else {
				return 'ok';
			}
		}
	}
?>