<?php
    // Creamos la class.
    class AdminController{
        
        public function validar(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if (isset($_POST["nombre"]) && isset($_POST["password"])) {

                require_once("models/admin.php"); 
                $validar = new Admin();
                if ($validar->validar($_POST["nombre"], $_POST["password"])==1){
                    $_SESSION["Administrador"]= $_POST["nombre"];
                }
                //Una vez terminado recoger los datos, validarlos los pasaremos a la vista y dependiendo los datos se mostrará una cosa u otra.
                require_once "views/admin/validarSesion.php";
        
            } else {
                header("index.php");
            }
        }
        public function login(){
            require_once "views/admin/login.php";
        }

    }