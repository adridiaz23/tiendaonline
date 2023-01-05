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
                            echo "<meta http-equiv=REFRESH content=2,URL=index.php?controller=Producto&action=registrar>";
                        }else{
                            //Si la imagen es correcta en tamaño y tipo
                            //Se intenta subir al servidor C:\xampp\htdocs\tiendaonline\views\css\assets\fotos
                            if (move_uploaded_file($temp, "views/css/assets/fotos/foto_".$_POST['isbn'].".jpg")) {
                                $producto->setImagen("views/css/assets/fotos/foto_".$_POST['isbn'].".jpg");
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
                        echo "<script>alert('El ISBN ".$_POST['isbn']." ya esta Registrado')</script>";
                        require_once "views/producto/registro.php";
                    }
                }else{
                    require_once "models/categoria.php";
                    $categoria = New Categoria("");
                    $listaCategorias = $categoria->mostrarCategorias();
                    require_once "views/producto/registro.php";
                }
            }else{
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
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
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
            }
            
        }

        //Funcion para eliminar el producto
        public function activar(){
            if(isset($_SESSION['Administrador'])){
                if(isset($_GET['isbn'])){
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $producto->setIsbn($_GET['isbn']);
                    $estado = $producto->obtenerEstado();
                    if($estado[0]->estado == 0){
                        $producto->setEstado('1');
                    }else{
                        $producto->setEstado('0');
                    }
                    $producto->activar();
                    ?>
                    <script>window.location.replace("index.php?controller=Producto&action=listado");</script>
                    <?php
                }else{
                    require_once "views/producto/lista.php";
                }
            }else{
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
            }
        }

        //Funcion para editar la imagen del producto
        public function editar(){
            if(isset($_SESSION['Administrador'])){
                if(isset($_GET['isbn'])){
                    require_once "models/producto.php";
                    require_once "models/categoria.php";
                    $categoria = New Categoria("");
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
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
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
                            //Se intenta subir al servidor C:\xampp\htdocs\tiendaonline\views\css\assets\fotos
                            if (move_uploaded_file($temp, "views/css/assets/fotos/foto_".$_POST['isbn'].".jpg")) {
                                $producto->setImagen("views/css/assets/fotos/foto_".$_POST['isbn'].".jpg");
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
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
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
                    ?>
                    <script>window.location.replace("index.php?controller=Producto&action=listado");</script>
                    <?php
                }else{
                    require_once "models/producto.php";
                    $producto = new Producto();
                    $lista = $producto->listadoProductos();
                    require_once "views/producto/lista.php";
                }
            }else{
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
            }
        }  

        //Funcion para printar la pgina del cada producto
        public function  paginaProducto(){
            if(isset($_GET['isbn']) && $_GET['isbn'] != ''){
                require_once "models/producto.php";
                $producto = new Producto();
                $producto->setIsbn($_GET['isbn']);
                $listadoProducto = $producto->listadoProducto3();
                $listadoProducto2 = $producto->listadoProducto2();

                if(array_key_exists('button1', $_POST)) {
                    if(intval($listadoProducto[0]->stock) > intval($_SESSION['carrito'][$_POST['isbn']])){
                        $_SESSION['carrito'][$_POST['isbn']]++;
                    }
                    ?>
                    <script>window.location.replace("index.php?controller=DetallePedido&action=listarCarrito");</script>
                    <?php
                }
                else if(array_key_exists('button2', $_POST)) {
                    if($_SESSION['carrito'][$_POST['isbn']] > 1){
                        $_SESSION['carrito'][$_POST['isbn']]--;
                    }
                    ?>
                    <script>window.location.replace("index.php?controller=DetallePedido&action=listarCarrito");</script>
                    <?php
                }else if(array_key_exists('button3', $_POST)) {
                    unset($_SESSION['carrito'][$_POST['isbn']]);
                    ?>
                    <script>window.location.replace("index.php?controller=DetallePedido&action=listarCarrito");</script>
                    <?php
                }else if(array_key_exists('button4', $_POST)) {
                    DetallePedidoController::vaciarCarrito();
                    ?>
                    <script>window.location.replace("index.php?controller=DetallePedido&action=listarCarrito");</script>
                    <?php
                }else if(array_key_exists('cantidad', $_POST)) {
                    $_SESSION['carrito'][$_POST['isbn']] = intval($_POST['cantidad']);
                    ?>
                    <script>window.location.replace("index.php?controller=DetallePedido&action=listarCarrito");</script>
                    <?php
                }

                require_once "views/producto/paginaProducto.php";
            }else{
                echo "No existe el producto";
            }
        }   
        
        //Funcion para printar la pagina del producto
        public function buscador()
        {
            if(isset($_POST['buscador'])){
                require_once "models/producto.php";
                $producto = new Producto();
                $listadoProductos = $producto->buscador($_POST['buscador']);
                require_once "views/producto/buscador.php";
            }else{
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
            }
        }

        public function añadirFavorito(){
            if(isset($_GET['isbn'])){
                require_once "models/favoritos.php";
                $productoFavorito = new Favorito();
                $productoFavorito->setIsbn($_GET['isbn']);
                $productoFavorito->setCorreoCliente($_SESSION['correo']);
                $lista = $productoFavorito->comprobarFavorito();
                if(count($lista) == 0){
                    $productoFavorito->insert();
                }else{
                    ?>
                    <script>alert("Producto ya favorito");</script>
                    <?php
                }
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
            }else{
                ?>
                <script>window.location.replace("index.php");</script>
                <?php
            }
        }

}
?>