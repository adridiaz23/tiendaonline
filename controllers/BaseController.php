<?php 

    class Salir{

        public static function salir(){
            require_once("models/salir.php"); 
            $validar = new Sesion();
            $validar->salir();
            require_once "index.php";
        }
    }
?>