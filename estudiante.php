<?php

class Estudiante{
    public $codigo;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $correo;

    function __construct($codigo, $nombres, $apellidos, $telefono, $correo){
        $this->codigo = $codigo;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    public function crearEstudiante():String{
        $mensaje = null;
        try{
            $dsn = "mysql:host=localhost;dbname=udh";
            $usuario = "root";
            $pass = "";
            $conn = new PDO($dsn,$usuario, $pass);
 
            $sql = "INSERT INTO estudiantes(codigo, nombres, apellidos, telefono, correo, id_pa) VALUES('$this->codigo','$this->nombres', '$this->apellidos', '$this->telefono', '$this->correo', 1)";
            $respuesta = $conn->prepare($sql);
            $respuesta->execute();
            $numRows = $respuesta->rowCount();
            if($numRows!=0){
                $mensaje = "<p>Se han guardado los datos</p>";
            }else{
                $mensaje = "<p>Hubo un error, no se guardo</p>";
            }
        }
        catch(PDOexception $e){
            $mensaje = $e->getMessage();
        } 
        return $mensaje;
    }
}
?>