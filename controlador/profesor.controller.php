<?php

	/**
	 * 
	 */
	class ProfesoresController
	{
		
		static public function ctrCrearProfesor(){
			if (isset($_POST['id_empleado'])) {
				if (!empty($_POST['id_empleado'])) {
					$tabla = 'profesores';
					$datos = [
						'id_empleado' => $_POST['id_empleado'],
						'apellido' => $_POST['apellido'],
						'nombre' => $_POST['nombre'],
						'seccional' => $_POST['seccional'],
						'facultad' => $_POST['facultad'],
						'cargo'=> $_POST['cargo'],
						'salario' => $_POST['salario'],
						'fecha_comienzo' => $_POST['fecha_comienzo'],
						'fecha_nacimiento' => $_POST['fecha_nacimiento']
					];
					$agregar = ProfesorModel::mdlCrearProfesor($tabla, $datos);
					if ($agregar == 'ok') {
						echo '<script>
							Swal.fire({
								icon:"success",
								title:"Profesor agregado",
								text:"Se ha agregado al profesor exitosamente",
								showconfirmButton:true,
								confirmButtonText:"Ok"
							}).then((result)=>{
								if(result.value){
									location.href = "/";
								}
							})
						</script>';
					} else {
						echo '<script>
							Swal.fire({
								icon:"error",
								title:"Error",
								html:"Se produjo un error al intentar agregar un profesor<br>'.$agregar.'",
								showconfirmButton:true,
								confirmButtonText:"Ok"
							}).then((result)=>{
								if(result.value){
									location.href = "/";
								}
							})
						</script>';
					}
				}
			}
		}

		static public function ctrListarAntiguedades(){
			$antiguedades = ProfesorModel::mdlListarAntiguedadesProfesores();
			return $antiguedades;
		}

		static public function ctrListarSueldoMasBajo(){
			$sueldomasbajo = ProfesorModel::mdlListarSueldosMasBajos();
			return $sueldomasbajo;
		}

		static public function ctrListadoProfesores(){
			$listado = ProfesorModel::mdlListarProfesores();
			return $listado;
		}

		static public function ctrListarIngenieria(){
			$ingenieria = ProfesorModel::mdlListarIngenieria();
			return $ingenieria;
		}

		static public function ctrSumarSueldosPorDepartamento(){
			$sueldosMensuales = ProfesorModel::mdlSumarSueldosPorFacultad();
			return $sueldosMensuales;
		}
	}
?>