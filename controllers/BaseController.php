<?php 
    class Sesion{
        public static function destruir(){
            session_start();
            session_unset();
            session_destroy();
        }
    }
?>