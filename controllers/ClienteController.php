<?php
    // Creamos la class.
    class ClienteController{
        
        public function validarCliente(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if (isset($_POST["correo"]) && isset($_POST["password"])) {
                require_once("models/cliente.php"); 
                $validar = new Cliente();
                $validar->setCorreoCliente($_POST["correo"]);
                $validar->setPassword(md5($_POST["password"]));
                $validarRow = $validar->validarCliente();
                
                $_SESSION["correo"] = $_POST["correo"];
                if (isset($validarRow[0]->nombre)){
                    //Una vez validado se genera la session del cliente
                    $_SESSION["Cliente"] =$validarRow[0]->nombre;
                   

                    if(isset($_SESSION["carrito"]) && (count($_SESSION["carrito"])>0 )){
                        header('Location:index.php?controller=Pedido&action=checkout');
                    }else{
                        header('Location:index.php?controller=Cliente&action=home');
                    }
                   
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
            if (isset($_POST["correo"]) && isset($_POST["password"])) {
                require_once("models/cliente.php"); 
                $validar = new Cliente();

                $validar->setNombre($_POST["nombre"]);
                $validar->setApellido($_POST["apellido"]);
                $validar->setCorreoCliente($_POST["correo"]);
                $validar->setCalle($_POST["calle"]);
                $validar->setNumero($_POST["numeroCalle"]);
                $validar->setDni($_POST["dni"]);
                $validar->setPassword(md5($_POST["password"]));
                $validar->setCodigoPostal($_POST["codigo"]);
            
            
                if ( $validar->registrarCliente()==1){

                    $_SESSION["Cliente"] = $_POST["nombre"];
                    $_SESSION["correoCliente"] = $_POST["correo"];

                    header('Location:index.php?controller=Cliente&action=home'); 

                }else{
                    echo "<h1>Correo ya registrado</h1>";
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
            require_once "models/producto.php";
            $producto =  new Producto();
            $lista = $producto->listadoProductosDestacados();
            require_once "views/cliente/home.php";
           
        }

        public function editarPerfil(){
       // var_dump($_SESSION['correo']);
           if(isset($_SESSION['Cliente'])){
            if(isset($_GET['correo'])){
                require_once "models/cliente.php";
                $cliente = new Cliente();
                //$cliente->setDni($_GET['correo']); 
                $lista = $cliente->mostrarDatos();
                require_once "views/cliente/editarPerfil.php";

            }elseif(isset($_POST)){
                require_once "models/cliente.php";
                $cliente = new Cliente();
                foreach($_POST as $clave => $valor){
                    $set = "set".$clave;
                    $cliente->$set($valor);
                 }
                $cliente->editarPerfil();
                $lista = $cliente->mostrarDatos();
                require_once "views/cliente/editarPerfil.php";
            }else{
                echo "El usuario no existe";
                require_once "views/cliente/login.php";
            }
           }
           
            //require_once "views/cliente/editarPerfil.php";
        }

        //Funcion para añadir opiniones
        public function opiniones()
        {
            if(isset($_SESSION['Cliente']) ){
                if(isset($_POST['estrellas'])){
                    require_once "models/pedido.php";
                    $pedido = new Producto();
                    $listadoPedido = $pedido->opiniones($_SESSION["correo"]);
                    require_once "views/cliente/opiniones.php";
                }
                else{
                    require_once "models/pedido.php";
                    $pedido = new Pedido();
                    $listadoPedido = $pedido->opiniones($_SESSION["correo"]);
                    require_once "views/cliente/opiniones.php";
                }
            }else{

                header('location:index.php');
            }
        }



    }