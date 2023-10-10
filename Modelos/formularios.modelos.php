<?php

require_once ("conexion.php");

class ModeloFormulario{

static public function mdlRegistro($tabla, $datos){
    $stmt= conexion::conectar()->prepare("INSERT INTO $tabla(nombre,email,password,) VALUES (:nombre,:email,:password)");
    
    $stmt -> bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
    $stmt -> bindParam(":email",$datos["email"], PDO::PARAM_STR);
    $stmt -> bindParam(":password",$datos["password"], PDO::PARAM_STR);

    if($stmt->execute()){
        return "ok";
    }else{
        print_r(conexion::conectar()->errorInfo());
    }

    $stmt=null;
    return ; 
}


}


?>