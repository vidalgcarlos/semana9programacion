<?php
$facultades = FacultadController::ctrListarFacultades();
$seccionales = SeccionalController::ctrSeccionalListar();
$cargos = CargosController::ctrCargosListar();
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
      <div class="card">
    <div class="card-header bg-success">
      <h4 class="card-title text-white">Agregar Profesor</h4>
    </div>
    <div class="card-body">
        <form role='form' method="post">
          <div class="form-group">
            <label for="id_empleado">Id Empleado</label>
            <input class="form-control" type="number" placeholder="ingresa el id del empleado" id="id_empleado" name="id_empleado">
          </div>
         <div class="row">
           <div class="col-6">
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input class="form-control" type="text" placeholder="escribe tu apellido" name="apellido" id="apellido">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input class="form-control" type="text" placeholder="escribe tu nombre" name="nombre" id="nombre">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
            <label for="seccional">Seccional</label>
            <select class="form-control" name="seccional" id="seccional">
              <option value="">Seleccione una seccional</option>
              <?php foreach ($seccionales as $seccional): ?>
                <option value="<?= $seccional['seccional'] ?>"><?= $seccional['seccional'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          </div>
          <div class="col-6">
            <div class="form-group">
            <label for="facultad">Facultad</label>
            <select class="form-control" name="facultad" id="facultad" required>
              <option value="">Seleccione una facultad</option>
              <?php foreach ($facultades as $facultad): ?>
                <option value="<?= $facultad['facultad'] ?>"><?= $facultad['facultad'] ;?></option>
              <?php endforeach ?>
            </select>
          </div>
          </div>
        </div>

          <div class="form-group">
            <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" class="form-control">
                  <option value="">Seleccione un cargo</option>
                  <?php foreach ($cargos as $cargo): ?>
                    <option value="<?= $cargo['cargo'] ?>"><?= $cargo['cargo'] ?></option>
                  <?php endforeach ?>
                </select>
          </div>

          <div class="form-group">
            <label for="salario">Salario</label>
            <input class="form-control" type="number" placeholder="Ingresa salario" name="salario" id="salario">
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="fecha_comienzo">Fecha Comienzo</label>
                <input class="form-control" type="date" placeholder="ingresa fecha de comienzo" name="fecha_comienzo" id="fecha_comienzo">
              </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input class="form-control" type="date" placeholder="ingresa fecha nacimiento"name="fecha_nacimiento" id="fecha_nacimiento">
              </div>
            </div>
          </div>


        </div>

        <div class="card-footer">
          <button class="btn btn-success" type="submit">Enviar formulario</button>
        </div>

    <?php
      $profesor = new ProfesoresController();
      $profesor->ctrCrearProfesor();
    ?>
  </form>

  </div>
  </div>
</body>
</html>