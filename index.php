<?php
  require_once 'controlador/profesor.controller.php';
  require_once 'modelo/profesores.model.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Proyecto Final Carlos Vidal</title>
</head>
<body>
  <form role='form' method="post">
    <input type="number" placeholder="ingresa el id del empleado" id="id_empleado" name="id_empleado">
    <input type="text" placeholder="escribe tu apellido" name="apellido" id="apellido">
    <input type="text" placeholder="escribe tu nombre" name="nombre" id="nombre">
    <input type="text" placeholder=" facultad" name="facultad" id="facultad">
    <input type="number" placeholder="Ingresa salario" name="salario" id="salario">
    <input type="date" placeholder="ingresa fecha de comienzo" name="fecha_comienzo" id="fecha_comienzo">
    <input type="date" placeholder="ingresa fecha nacimiento"name="fecha_nacimiento" id="fecha_nacimiento">
    <button type="submit">Enviar formulario</button>
    <?php
      $profesor = new ProfesoresController();
      $profesor->ctrCrearProfesor();
    ?>
  </form>
</body>
</html>