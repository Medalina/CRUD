<?php
    include("conexion.php");
        $codigo = $_POST['codigo'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $query="INSERT INTO estudiantes(codigo,nombres,apellidos,telefono,correo,id_pa) VALUES('$codigo','$nombres','$apellidos','$telefono','$correo',1)";
        $resultado=$conexion->query($query);

        if($resultado){
            header("Location: mostrar.php");
        }else{
            echo "Ingreso Fallida";
        }
?>