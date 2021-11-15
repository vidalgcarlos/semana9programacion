<?php /**
 *
 */
class SeccionalController
{
	static public function ctrSeccionalListar(){
		$tabla = 'profesores';
		$respuesta = SeccionalModel::mdlMostrarSeccionales($tabla);
		return $respuesta;
	}
} ?>