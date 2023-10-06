<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fc950ef1b2.js" crossorigin="anonymous"></script>
    <title>Crud PHP y MySql</title>
</head>

<body>
    <h1 class="text-center p-3">REGISTRO DE PERSONAL</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php"
    ?>
    <div class="container-fluid row">

      <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secundary">Registro de datos</h3>
        <?php
        include "controlador/registro_persona.php"
        ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
          <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Apellidos de la persona</label>
          <input type="text" class="form-control" name="apellido">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
          <input type="text" class="form-control" name="dni">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" name="fecha_nac">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
          <input type="email" class="form-control" name="correo">
        </div>
        

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
      </form >

      <div class="col-8 p-4">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DNI</th>
      <th scope="col">FECHA NACIMIENTO</th>
      <th scope="col">EMAIL</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql=$conexion->query(" select * from persona ");
    while($datos=$sql->fetch_object()){ ?>

    <tr>
      <td><?= $datos->id ?></td>
      <td><?= $datos->nombre ?></td>
      <td><?= $datos->apellido ?></td>
      <td><?= $datos->dni ?></td>
      <td><?= $datos->fecha_nac ?></td>
      <td><?= $datos->correo ?></td>
      <td>
        <a href="modificar_producto.php?id=<?= $datos->id ?>"  class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>

    <?php
    }
    ?>

    
  </tbody>
</table>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  function eliminar(){
    var respuesta=confirm("¿ESTA SEGURO QUE DESEA ELIMINAR ESTE REGISTRO?")
    return respuesta
  }
</script>
</body>
</html>