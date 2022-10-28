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
       
    }
        