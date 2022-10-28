<?php 
//cambiar nombre del controlador
    class Sesion{
        public  satic function destruir(){
            session_start();
            session_unset();
            session_destroy();
        }
    }
?>