<?php

class conexion{

    static public function conectar(){
        $link= new PDO("mysql:host=localhost:3307;dbname=wedding_afvr4b","ariel","arielvic12");
        
        $link -> exec("set names utf8");

        return $link;
    }
}


?>