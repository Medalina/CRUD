<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table bgcolor="#B6DEE7" border="1">
            <thead>
                <tr>
                    <th colspan="1"><a href="formulario.php">Nuevo</a></th>
                    <th colspan="8">Lista de Estudiantes</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Codigo</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Telefono</td>
                    <td>Email</td>
                    <td>PA</td>
                    <td colspan="2">Procedimientos</td>
                </tr>
            <?php
                    include("conexion.php");

                    $query="SELECT * FROM estudiantes";
                    $resultado=$conexion->query($query);

                    while($row=$resultado->fetch_assoc()){
            ?>       
                <tr>
                    <td><?php echo $row["id"]; ?></td>     
                    <td><?php echo $row["codigo"];?></td>
                    <td><?php echo $row["nombres"];?></td>
                    <td><?php echo $row["apellidos"];?></td>
                    <td><?php echo $row["telefono"];?></td>
                    <td><?php echo $row["correo"];?></td>
                    <td><?php echo $row["id_pa"];?></td>
                    <td><a href="tabla.php?id=<?php echo $row['id'];?>">Modificar</a></td>  
                    <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
                </tr>
            <?php        
                    }
            ?>
            </tbody>
        </table>
    </center>
</body>
</html>