<?php /**
 *
 */
class FacultadController
{
	static public function ctrMostrarFacultades(){
		$tabla = 'profesores';
		$respuesta = FacultadModel::mdlMostrarFacultades($tabla);
		return $respuesta;
	}
} ?>