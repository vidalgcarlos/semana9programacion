<?php
  $ingenieria = ProfesoresController::ctrListarIngenieria();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <title>Proyecto Final Carlos Vidal</title>
</head>
<body>
  <div class="container">
    <?php include 'menu.php'; ?>
    <br>
    <table class="table">
      <thead>
        <tr class="bg-success">
          <th colspan="3" class="text-white text-center">Profesores de ingenieria</th>
        </tr>
        <tr>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fecha Comienzo</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($ingenieria as $val): ?>
          <tr>
            <td><?= $val['apellido']?></td>
            <td><?= $val['nombre']?></td>
            <td><?= $val['fecha_comienzo']?></td>
          </tr>
        <?php  $i++; endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>