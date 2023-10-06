<?php
    include "modelo/conexion.php";
    $id=$_GET["id"];

    $sql=$conexion->query(" select * from persona where id=$id")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secundary">Modificar personal</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
            include "controlador/modificar_producto.php";
            while($datos=$sql->fetch_object()){ ?>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos de la persona</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos->dni?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nac" value="<?= $datos->fecha_nac?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="correo" value="<?= $datos->correo?>">
              </div>
          <?php }
        ?>
        
        

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Guardar cambios</button>
    </form >
</body>
</html>