<?php

class ControladorFormularios{

    static public function ctrRegistro(){
        if(isset($_POST["nombre"])){
            $tabla="registros";
            $datos= array("nombre" => $_POST["nombre"],
            "email" => $_POST["email"],
            "password" => $_POST["contrasena"]);

        $respuesta= ModeloFormulario::mdlRegistro($tabla,$datos);


            return $respuesta;
        }
    }
}


?>