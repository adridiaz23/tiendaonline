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
            if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0){
                foreach($_SESSION['carrito'] as $clave => $valor){
                    $listaIsbn[] = $clave;
                }
                $producto = new Producto();
                $listadoCarrito = $producto->listadoCarrito($listaIsbn);
                if(array_key_exists('button1', $_POST)) {
                    $_SESSION['carrito'][$_POST['isbn']]['cantidad']++;
                    header('Location:index.php?controller=Base&action=listarCarrito');
        
                }
                else if(array_key_exists('button2', $_POST)) {
                    if($_SESSION['carrito'][$_POST['isbn']]['cantidad'] > 1){
                        $_SESSION['carrito'][$_POST['isbn']]['cantidad']--;
                    }
                    header('Location:index.php?controller=Base&action=listarCarrito');
                }else if(array_key_exists('button3', $_POST)) {
                    unset($_SESSION['carrito'][$_POST['isbn']]);
                    //header('Location:index.php?controller=Base&action=listarCarrito');
                }
            }
            require_once "views/producto/carrito.php";
        }

    }
?>