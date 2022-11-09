<?php
    // Creamos la class.
    class ClietneController{
        
        public function validar(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if (isset($_POST["nombre"]) && isset($_POST["password"])) {

                require_once("models/admin.php"); 
                $validar = new Admin();
               
                if ($validar->validar($_POST["nombre"], $_POST["password"])==1){
                    $_SESSION["Administrador"] = $_POST["nombre"];
                    header('Location:index.php?controller=Admin&action=home'); 
                }else{
                    echo "<h1> Nombre o contraseña incorrectos </h1>";
                    require_once ("views/admin/login.php");
                }
                //Una vez terminado recoger los datos, validarlos los pasaremos a la vista y dependiendo los datos se mostrará una cosa u otra.
            } else {
                header("index.php");
            }
        }
        public function login(){
            require_once "views/admin/login.php";
        }

        public function home(){
            require_once "views/admin/home.php";
        }

    }