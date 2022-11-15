<?php 

    class BaseController{

        public static function salir(){
            session_unset();
            session_destroy();
            header("Location:index.php");
        }

        public static function añadirCarrito(){
            if(isset($_GET['isbn'])){ 
                //unset($_SESSION['carrito']);
                $isbn=intval($_GET['isbn']);
                if(isset($_SESSION['carrito'][$isbn])){ 
                    
                    $_SESSION['carrito'][$isbn]['cantidad']++;

                }else{ 
                    echo "Menos";
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $producto->setIsbn($_GET['isbn']);
                    if($producto->listadoProducto()){
                        $_SESSION['carrito'][$isbn] = array("cantidad" => $_GET['cantidad']);
                        //$_SESSION['carrito'][$_GET['isbn']] = intval($_GET['cantidad']);
                    }else{
                        ?>
                        <script>alert('No existe el producto')</script>
                        <?php
                    }
                }
            }else{
                ?>
                    <script>alert('No existe el producto')</script>
                <?php
                
            }
            header("Location:index.php");
        }

        public static function vaciarCarrito(){
            unset($_SESSION['carrito']);
        }

        public static function listarCarrito(){
            require_once "models/producto.php";
            foreach($_SESSION['carrito'] as $clave => $valor){
                $listaIsbn[] = $clave;
            }
            $producto = new Producto();
            $listadoCarrito = $producto->listadoCarrito($listaIsbn);
            require_once "views/producto/carrito.php";
        }

    }
?>