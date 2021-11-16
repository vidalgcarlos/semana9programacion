<?php
  require_once 'controlador/plantilla.controller.php';
  require_once 'controlador/profesor.controller.php';
  require_once 'controlador/facultad.controller.php';
  require_once 'controlador/seccional.controller.php';
  require_once 'controlador/cargos.controller.php';

  require_once 'modelo/profesores.model.php';
  require_once 'modelo/cargos.model.php';
  require_once 'modelo/seccional.model.php';

  require_once 'modelo/facultad.model.php';
  require_once 'modelo/conexion.php';

  if ($_GET['ruta']=='antiguedad') {
    $antiguedad = new PlantillaController();
    $antiguedad->ctrMostrarAntiguedad();
  } else if ($_GET['ruta'] == 'sueldomasbajo'){
    $salario = new PlantillaController();
    $salario->ctrMostrarSueldosBajos();
  } else if ($_GET['ruta']=='listado'){
    $listado = new PlantillaController();
    $listado->ctrMostrarListado();
  } else if ($_GET['ruta'] =='ingenieria'){
    $ingenieria = new PlantillaController();
    $ingenieria->ctrMostrarIngenieria();
  } else if ($_GET['ruta'] =='gastosanuales') {
    $gastoanual = new PlantillaController();
    $gastoanual->ctrMostrarGastosAnuales();
  } else {
    $home = new PlantillaController();
    $home->ctrMostrarHome();
  }


?>

