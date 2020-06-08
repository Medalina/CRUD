<?php
    include("conexion.php");
    
        $id=$_REQUEST['id'];

        $query="DELETE FROM estudiantes WHERE id='$id'";
        $resultado=$conexion->query($query);

        if($resultado){
            header("Location: mostrar.php");
        }else{
            echo "Ingreso Fallida";
        }
?>