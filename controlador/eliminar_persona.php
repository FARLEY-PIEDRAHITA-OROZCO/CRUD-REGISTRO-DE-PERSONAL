<?php
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$conexion->query(" delete from persona where id=$id ");
        if ($sql==1) {
            echo "<div class='alert alert-success text-center'>REGISTRO ELIMINADO CORRECTAMENTE</div>";
        } else{
            echo "<div class='alert alert-danger text-center'>ERROR AL ELIMINAR REGISTRO</div>";
        }
    }
?>