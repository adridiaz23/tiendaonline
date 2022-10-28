<?php 
    class ProductoController{
        public function registrar(){
            if(isset($_SESSION['Administrador'])){
                if(isset($_POST)){
                    require_once "models/producto.php";
                    $producto = new Producto();
                    //$usuario->conectar();
                    foreach($_POST as $clave => $valor){
                       $set = "set".$clave;
                       $producto->$set($valor);
                    }
                    $producto->insertar();
                    require_once "views/producto/registro.php";
                }else{
                    require_once "views/producto/registro.php";
                }
            }else{
                header("index.php");
            }
        }
    }
?>