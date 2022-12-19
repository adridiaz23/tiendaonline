<?php
    // Creamos la class.
    class PedidoController{
        public function mostrarPedidos(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if(isset($_SESSION["Administrador"])){
                //Parte del filtro de búsqueda, dependido los campos rellenados.
                if (isset($_POST["estado"]) && $_POST['estado'] != ""){
                    require_once("models/pedido.php"); 
                    $pedido = new Pedido();
                    if(isset($_POST['txtbusca'])){
                        $pedido->setEstado($_POST['estado']);
                        $pedido->setCorreoCliente($_POST['txtbusca']);
                        $todosLosPedidos = $pedido->buscarCorreoEstado();
                    }else{
                        $pedido->setEstado($_POST['estado']);
                        $todosLosPedidos = $pedido->buscarEstado();
                    }
                    require_once "views/pedido/mostrarPedidos.php";

                }elseif(isset($_POST['txtbusca']) && $_POST['estado'] == ""){
                    require_once("models/pedido.php"); 
                    $pedido = new Pedido();
                    $pedido->setCorreoCliente($_POST['txtbusca']);
                    $todosLosPedidos = $pedido->buscarCorreo();
                    require_once "views/pedido/mostrarPedidos.php";
                }else{
                    require_once("models/pedido.php"); 
                    $pedido = new Pedido();
                    $todosLosPedidos = $pedido->mostrarPedidos();
                    require_once "views/pedido/mostrarPedidos.php";
                }
            } else {
                header("index.php");
            }
        }
        //Funcion para editar el estado del pedido
        public function editarEstado(){
            if(isset($_SESSION["Administrador"])){
                if(isset($_GET['idPedido']) && isset($_GET['estado'])){
                    require_once("models/pedido.php"); 
                    $pedido = new Pedido();
                    $pedido-> setIdPedido($_GET['idPedido']);
                    $pedido -> setEstado($_GET['estado']);
                    $pedido->editarEstado();
                    $todosLosPedidos = $pedido->mostrarPedidos();
                    require_once "views/pedido/mostrarPedidos.php";
                }else{
                    echo "Faltan datos";
                    require_once("models/pedido.php"); 
                    $pedido = new Pedido();
                    $todosLosPedidos = $pedido->mostrarPedidos();
                    require_once "views/pedido/mostrarPedidos.php";
                }
            }else{
                header("index.php");
            }
        }
        //Funcion para mostrar el detalle del pedido seleccionado
        public function mostrarDetallePedido(){
            if(isset($_SESSION["Administrador"])){
                if(isset($_GET['idPedido'])){
                    require_once("models/pedido.php"); 
                    $pedido = new Pedido();
                    $pedido-> setIdPedido($_GET['idPedido']);
                    $todosLosPedidos = $pedido->mostrarDetallePedido();
                    require_once "views/pedido/mostrarDetallePedido.php";
                }else{
                    echo "Faltan datos";
                    require_once("models/pedido.php"); 
                    $pedido = new Pedido();
                    $todosLosPedidos = $pedido->mostrarPedidos();
                    require_once "views/pedido/mostrarPedidos.php";
                }
            }else{
                header("index.php");
            }
        }

        function checkout(){
            require_once("models/pedido.php");
            if(isset($_SESSION['Cliente']) && count($_SESSION['carrito']) > 0){
                require_once "views/pedido/checkout.php";
            }elseif(isset($_SESSION['Cliente']) && count($_SESSION['carrito']) == 0){
                header("location:index.php?controller=DetallePedido&action=listarCarrito");
            }else{
                header("location:index.php?controller=cliente&action=login");
            }
        }

        function finalizarCompra(){
            require_once("models/pedido.php");
            
            require_once("models/detallePedido.php");
            require_once("models/producto.php");
        }
    }
        