<?php

	/**
	 * 
	 */
	class ProfesoresController
	{
		
		static public function ctrCrearProfesor(){
			if (isset($_POST['id_empleado'])) {
				if (!empty($_POST['id_empleado'])) {
					$tabla = '';
					$datos = [
						'id_empleado' => $_POST['id_empleado'],
						'apellido' => $_POST['apellido'],
						'nombre' => $_POST['nombre'],
						'facultad' => $_POST['facultad'],
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
								text:"Se produjo un error al intentar agregar un profesor",
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
	}
?>