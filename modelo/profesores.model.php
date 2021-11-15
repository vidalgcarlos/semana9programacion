<?php
	require_once 'conexion.php';

	/**
	 *
	 */
	class ProfesorModel	{
		static public function mdlCrearProfesor($tabla, $datos){
			try {
				$stmt = Conexion::conectar()->prepare("INSERT into $tabla (id_empleado, apellido, nombre, seccional, facultad, cargo, salario, fecha_comienzo, fecha_nacimiento) values (:id_empleado, :apellido, :nombre, :seccional, :facultad, :cargo, :salario, :fecha_comienzo, :fecha_nacimiento)");
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

		static public function mdlListarAntiguedadesProfesores(){
			try {
				$stmt = Conexion::conectar()->prepare("SELECT * from profesores ORDER BY fecha_comienzo ASC");
				$stmt->execute();
				$retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
			} catch (PDOException $e) {
				$error  = $e->getMessage();
			}

			$stmt = null;
			if (isset($error)) {
				return $error;
			} else {
				return $retorno;
			}
		}

		static public function mdlListarSueldosMasBajos(){
			try {
				$stmt = Conexion::conectar()->prepare("SELECT * from profesores ORDER BY salario ASC");
				$stmt->execute();
				$retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
			} catch (PDOException $e) {
				$error  = $e->getMessage();
			}

			$stmt = null;
			if (isset($error)) {
				return $error;
			} else {
				return $retorno;
			}
		}

		static public function mdlListarProfesores(){
			try {
				$stmt = Conexion::conectar()->prepare("SELECT * from profesores");
				$stmt->execute();
				$retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
			} catch (PDOException $e) {
				$error  = $e->getMessage();
			}

			$stmt = null;
			if (isset($error)) {
				return $error;
			} else {
				return $retorno;
			}
		}
	}
?>