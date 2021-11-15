<?php
  $sueldomasbajo = ProfesoresController::ctrListarSueldoMasBajo();
  $i = 0;
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
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id Empleado</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">Seccional</th>
          <th scope="col">Facultad</th>
          <th scope="col">Cargo</th>
          <th scope="col">Salario</th>
          <th scope="col">Fecha Comienzo</th>
          <th scope="col">Fecha Nacimiento</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($sueldomasbajo as $val): ?>
          <tr>
            <th scope="row"><?= $val['id_empleado']?></th>
            <td><?= $val['apellido']?></td>
            <td><?= $val['nombre']?></td>
            <td><?= $val['seccional']?></td>
            <td><?= $val['facultad']?></td>
            <td><?= $val['cargo']?></td>
            <td><?= number_format($val['salario'],0,',','.')?> <?php if ($i==0): ?>
                <span class="badge badge-danger">Sueldo mas bajo</span>
              <?php endif ?></td>
            <td>
              <?= $val['fecha_comienzo']?>
            </td>
            <td><?= $val['fecha_nacimiento']?></td>
          </tr>
        <?php  $i++; endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>