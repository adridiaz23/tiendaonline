<?php 

    class BaseController{

        public static function salir(){
            session_unset();
            session_destroy();
            require_once('views/admin/login.php');
        }
    }
?>