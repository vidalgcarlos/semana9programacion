<?php /**
 *
 */
class FacultadController
{
	static public function ctrListarFacultades(){
		$tabla = 'profesores';
		$respuesta = FacultadModel::mdlMostrarFacultades($tabla);
		return $respuesta;
	}
} ?>