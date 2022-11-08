<?php 
    class ProductoController{

        //Funcion para registrar el producto
        public function registrar(){
            if(isset($_SESSION['Administrador'])){//Validamos que accede el administrador
                if(isset($_POST['isbn'])){//Validaos que tengamos un formulario rellenado
                    require_once "models/producto.php";
                    $producto = new Producto();
                    if($producto->validar($_POST['isbn'])){//validamos que no este el libro ya creado
                        foreach($_POST as $clave => $valor){
                           $set = "set".$clave;
                           $producto->$set($valor);
                        }
                        //Recogemos el archivo enviado por el formulario
                        $archivo = $_FILES['imagen']['name'];
                        //Si el archivo contiene algo y es diferente de vacio
                        if (isset($archivo) && $archivo != "") {
                        //Obtenemos algunos datos necesarios sobre el archivo
                        $tipo = $_FILES['imagen']['type'];
                        $tamano = $_FILES['imagen']['size'];
                        $temp = $_FILES['imagen']['tmp_name'];
                        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                        if (!((strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                            echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                            - Se permiten archivos .jpg, .png. y de 200 kb como máximo.</b><br>Por favor Vuelva a registrarse</div>';
                            echo "<meta http-equiv=REFRESH content=2,URL=registro_cursos.php>";
                        }else{
                            //Si la imagen es correcta en tamaño y tipo
                            //Se intenta subir al servidor C:\xampp\htdocs\tiendaonline\views\css\fotos
                            if (move_uploaded_file($temp, "views/css/fotos/foto_".$_POST['isbn'].".jpg")) {
                                $producto->setImagen("views/css/fotos/foto_".$_POST['isbn'].".jpg");
                                $producto->insertar();
                                $lista = $producto->listadoProductos();
                                require_once "views/producto/lista.php";
                            }else{
                                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                                echo "Por favor vuelva a registrarse..";
                                require_once "views/producto/registro.php";
                            }
                        }
                    }
                    }else{
                        echo "El ISBN ".$_POST['isbn']." ya esta Registrado";
                        require_once "views/producto/registro.php";
                    }
                }else{
                    require_once "models/categoria.php";
                    $categoria = New Categoria();
                    $listaCategorias = $categoria->mostrarCategorias();
                    require_once "views/producto/registro.php";
                }
            }else{
                header("index.php");
            }
        }

        //Funcion para enlistar todos los productos
        public function listado(){
            if(isset($_SESSION['Administrador'])){
                require_once "models/producto.php";
                $producto = new Producto();
                $lista = $producto->listadoProductos();
                require_once "views/producto/lista.php";
            }else{
                header("index.php");
            }
            
        }

        //Funcion para eliminar el producto
        public function eliminar(){
            if(isset($_SESSION['Administrador'])){
                if(isset($_GET['isbn'])){
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $producto->setIsbn($_GET['isbn']);
                    $producto->eliminar();
                    $lista = $producto->listadoProductos();
                    require_once "views/producto/lista.php";
                }else{
                    require_once "views/producto/lista.php";
                }
            }else{
                header("index.php");
            }
        }

        //Funcion para editar la imagen del producto
        public function editar(){
            if(isset($_SESSION['Administrador'])){
                if(isset($_GET['isbn'])){
                    require_once "models/producto.php";
                    require_once "models/categoria.php";
                    $categoria = New Categoria();
                    $listaCategorias = $categoria->mostrarCategorias();
                    $producto = new Producto();
                    $producto->setIsbn($_GET['isbn']);
                    $lista = $producto->listadoProducto();
                    require_once "views/producto/editar.php";
                }elseif(isset($_POST['isbn'])){
                    require_once "models/producto.php";
                    $producto = new Producto();
                    foreach($_POST as $clave => $valor){
                       $set = "set".$clave;
                       $producto->$set($valor);
                    }
                    $producto->editar();
                    $lista = $producto->listadoProductos();
                    require_once "views/producto/lista.php";
                }else{
                    echo "El ISBN ".$_GET['isbn']." No existe";
                    $lista = $producto->listadoProductos();
                    require_once "views/producto/lista.php";
                }
            }else{
                header("index.php");
            }
        }

        //Funcion para editar la imagen del producto
        public function editarImagen(){
            if(isset($_SESSION['Administrador'])){//Validamos que accede el administrador
                if(isset($_POST['isbn'])){//Validaos que tengamos un formulario rellenado
                    require_once "models/producto.php";
                    $producto = new Producto();
                    //Recogemos el archivo enviado por el formulario
                    $archivo = $_FILES['imagen']['name'];
                    //Si el archivo contiene algo y es diferente de vacio
                    if (isset($archivo) && $archivo != "") {
                        //Obtenemos algunos datos necesarios sobre el archivo
                        $tipo = $_FILES['imagen']['type'];
                        $tamano = $_FILES['imagen']['size'];
                        $temp = $_FILES['imagen']['tmp_name'];
                        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                        if (!((strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                            echo "<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                            - Se permiten archivos .jpg, .png. y de 200 kb como máximo.</b><br>Por favor Vuelva a registrarse</div>";
                            
                        }else{
                            //Si la imagen es correcta en tamaño y tipo
                            //Se intenta subir al servidor C:\xampp\htdocs\tiendaonline\views\css\fotos
                            if (move_uploaded_file($temp, "views/css/fotos/foto_".$_POST['isbn'].".jpg")) {
                                $producto->setImagen("views/css/fotos/foto_".$_POST['isbn'].".jpg");
                                $producto->setIsbn($_POST['isbn']);
                                $producto->editarImagen();
                                $lista = $producto->listadoProductos();
                                require_once "views/producto/lista.php";
                            }else{
                                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                                echo "<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>";
                                echo "Por favor vuelva a Editar la imagen..";
                                require_once "views/producto/editarImagen.php";
                            }
                        }
                    }

                }elseif(isset($_GET['isbn'])){
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $producto ->setIsbn($_GET['isbn']);
                    $lista = $producto->listadoProducto();
                    require_once "views/producto/editarImagen.php";
                }
                else{
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $lista = $producto->listadoProductos();
                    require_once "views/producto/lista.php";
                }
            }else{
                header("index.php");
            }
        }

        //Funcion para editar el destacado del producto
        public function editarDestacado(){
            if(isset($_SESSION['Administrador'])){//Validamos que accede el administrador
                if(isset($_GET['isbn']) && isset($_GET['destacado'])){
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $producto -> setIsbn($_GET['isbn']);
                    $producto -> setDestacado($_GET['destacado']);
                    $producto->editarDestacado();
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
        }        
}
?>