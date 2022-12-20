<?php
    // Creamos la class.
    class AdminController{
        
        //Función para validar el inicio de sesión del Admin
        public function validar(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if (isset($_POST["nombre"]) && isset($_POST["password"])) {
                require_once("models/admin.php"); 
                $validar = new Admin();
                if ($validar->validar($_POST["nombre"], md5($_POST["password"]))==1){
                    $_SESSION["Administrador"] = $_POST["nombre"];
                    header('Location:index.php?controller=Admin&action=home'); 
                }else{
                    echo "<h1> Nombre o contraseña incorrectos </h1>";
                    require_once ("views/admin/login.php");
                }
                //Una vez terminado recoger los datos, validarlos los pasaremos a la vista y dependiendo los datos se mostrará una cosa u otra.
            } else {
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
            }
        }

        //Función para crear el formulario del login Admin
        public function login(){
            require_once "views/admin/login.php";
        }

        //Función para redirigir a la página de inicio
        public function home(){
            require_once "views/admin/home.php";
        }

    }