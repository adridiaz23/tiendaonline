<?php

    class Sesion{
       
        public function salir (){   
            session_start();
            session_unset();
            session_destroy();
        }
    }

?>