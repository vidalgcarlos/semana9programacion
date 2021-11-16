<?php
	/**
	 * c
	 */
	class PlantillaController
	{

		public function ctrMostrarHome(){
			include 'vista/plantilla.php';
		}

		public function ctrMostrarAntiguedad(){
			include 'vista/antiguedad.php';
		}

		public function ctrMostrarSueldosBajos(){
			include 'vista/sueldomasbajo.php';
		}

		public function ctrMostrarListado(){
			include 'vista/listado.php';
		}

		public function ctrMostrarIngenieria(){
			include 'vista/ingenieria.php';
		}

		public function ctrMostrarGastosAnuales(){
			include 'vista/gastosanuales.php';
		}
	}

?>