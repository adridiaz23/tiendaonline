<?php
    // Creamos la class.
    class ClienteController{
        
        public function validarCliente(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if (isset($_POST["nombre"]) && isset($_POST["password"])) {

                require_once("models/cliente.php"); 
                $validar = new Cliente();
               
                if ($validar->validarCliente($_POST["nombre"], $_POST["password"])==1){
                    $_SESSION["Cliente"] = $_POST["nombre"];
                    header('Location:index.php?controller=Cliente&action=home'); 
                }else{
                    echo "<h1> Nombre o contraseña incorrectos </h1>";
                    require_once ("views/cliente/login.php");
                }
                //Una vez terminado recoger los datos, validarlos los pasaremos a la vista y dependiendo los datos se mostrará una cosa u otra.
            } else {
                header("index.php");
            }
        }

        public function registrarCliente(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if (isset($_POST["nombre"]) && isset($_POST["password"])) {

                require_once("models/cliente.php"); 
                $validar = new Cliente();
               
                if ($validar->registrarCliente($_POST["nombre"], $_POST["password"])==1){
                    $_SESSION["Cliente"] = $_POST["nombre"];
                    header('Location:index.php?controller=Cliente&action=home'); 
                }else{
                    echo "<h1> Nombre o contraseña incorrectos </h1>";
                    require_once ("views/cliente/registrar.php");
                }
                //Una vez terminado recoger los datos, validarlos los pasaremos a la vista y dependiendo los datos se mostrará una cosa u otra.
            } else {
                header("index.php");
            }
        }

        public function registrar(){
            require_once "views/cliente/registrar.php";
        }

        public function login(){
            require_once "views/cliente/login.php";
        }

        public function home(){
            require_once "views/cliente/home.php";
        }

    }