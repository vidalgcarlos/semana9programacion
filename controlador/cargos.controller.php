<?php /**
 *
 */
class CargosController
{

	static public function ctrCargosListar(){
		$tabla = 'profesores';
		$respuesta = CargosModel::MdlMostrarCargos($tabla);
		return $respuesta;
	}
} ?>