<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <center>
            <?php
              $id=$_REQUEST['id']; 

                    include("conexion.php");

                    $query="SELECT * FROM estudiantes WHERE id='$id'";
                    $resultado=$conexion->query($query);
                    $row=$resultado->fetch_assoc();
            ?>

        <form method="POST" action="modificar_proceso.php?id=<?php echo $row['id'];?>">
             </br></br></br>  

            <input type="text" name="codigo" placeholder="Codigo" value="<?php echo $row['codigo'];?>" required/><br><br>
            <input type="text" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres'];?>" required/><br><br>
            <input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos'];?>" required/><br><br>
            <input type="text" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono'];?>" /><br><br>
            <input type="text" name="correo" placeholder="Email" value="<?php echo $row['correo'];?>" /><br><br>
            <input type="submit" name="submit" value="Guardar">
        </form>
        </center>
    </body>
    </html>