<?php
	require_once 'conexion.php';

	/**
	 *
	 */
	class ProfesorModel	{
		static public function mdlCrearProfesor($tabla, $datos){
			try {
				$stmt = Conexion::conectar()->prepare("INSERT insto $tabla (id_empleado, apellido, nombre, seccional, facultad, cargo, salario, fecha_comienzo, fecha_nacimiento) values (:id_empleado, :apellido, :nombre, :seccional, :facultad, :cargo, :salario, :fecha_comienzo, :fecha_nacimiento)");
				$stmt->bindParam(":id_empleado", $datos['id_empleado'], PDO::PARAM_STR);
				$stmt->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
				$stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
				$stmt->bindParam(":seccional", $datos['seccional'], PDO::PARAM_STR);
				$stmt->bindParam(":facultad", $datos['facultad'], PDO::PARAM_STR);
				$stmt->bindParam(":cargo", $datos['cargo'], PDO::PARAM_STR);
				$stmt->bindParam(":salario", $datos['salario'], PDO::PARAM_STR);
				$stmt->bindParam(":fecha_comienzo", $datos['fecha_comienzo'], PDO::PARAM_STR);
				$stmt->bindParam(":fecha_nacimiento", $datos['fecha_nacimiento'], PDO::PARAM_STR);
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