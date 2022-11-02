<?php
    // Creamos la class.
    class PedidoController{

        public function mostrarPedidos(){
            // Mientras no se pasen los datos del formulario mostraremos el else
            if(isset($_SESSION["Administrador"])){
                require_once("models/pedido.php"); 
                $pedido = new Pedido();
                $todosLosPedidos = $pedido->mostrarPedidos();
                require_once "views/pedido/mostrarPedidos.php";
            } else {
                header("index.php");
            }
        }

        //Funcion para editar el destacado del producto
        public function editarEstado(){
            if(isset($_SESSION["Administrador"])){
                if(isset($_GET['idPedido']) && isset($_GET['estado'])){
                    

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

       /* public function editarEstado(){
            if(isset($_SESSION['Administrador'])){//Validamos que accede el administrador
                if(isset($_GET['isbn']) && isset($_GET['destacado'])){
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $producto -> setIsbn($_GET['isbn']);
                    $producto -> setDestacado($_GET['destacado']);
                    $producto->editarEstado();
                    $lista = $producto->listadoProductos();
                    require_once "views/producto/lista.php";
                }else{
                    echo "No hay ISBN para editar";
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $lista = $producto->listadoProductos();
                    require_once "views/producto/lista.php";
                }
            }else{
                header("index.php");
            }
        }   */     
       
    }
        