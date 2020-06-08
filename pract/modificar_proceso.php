<?php
    include("conexion.php");

        $id=$_REQUEST['id'];
        $codigo = $_POST['codigo'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $query="UPDATE estudiantes SET codigo='$codigo',nombres='$nombres', apellidos='$apellidos', telefono='$telefono',correo='$correo', id_pa='$id_pa' WHERE id='$id'";
        $resultado=$conexion->query($query);

        if($resultado){
            header("Location: mostrar.php");
        }else{
            echo "Ingreso Fallida";
        }
?>