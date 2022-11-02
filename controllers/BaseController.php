<?php 

    class BaseController{

        public static function salir(){
            session_unset();
            session_destroy();
            header("Location:index.php");
        }
    }
?>