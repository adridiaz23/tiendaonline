<?php
    // Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Producto extends Database{
        private $isbn;
        private $nombre;
        private $descripcion;
        private $imagen;
        private $precio;
        private $stock;
        private $categoria;
        private $autor;
        private $destacado;
        private $estado;

        //GETTERS
        public function getIsbn()
        {
            return $this->isbn;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        public function getImagen()
        {
            return $this->imagen;
        }

        public function getPrecio()
        {
            return $this->precio;
        }

        public function getStock()
        {
            return $this->stock;
        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        public function getDestacado()
        {
            return $this->destacado;
        }
        
        //SETTERS
        public function setIsbn($isbn)
        {
            $this->isbn = $isbn;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }

        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }

        public function setStock($stock)
        {
            $this->stock = $stock;
        }

        public function setCategoria($categoria)
        {
            $this->categoria = $categoria;
        }

        public function setAutor($autor)
        {
            $this->autor = $autor;
        }       

        public function setDestacado($destacado)
        {
            $this->destacado = $destacado;
        }

        public function getEstado()
        {
                return $this->estado;
        }

        
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        
        //FUNCIONES

        //Funcion para saber si ya tenemos creado un producto con este ISBN
        public function validar($isbn){
            // Consulta
            $sql = "SELECT * FROM producto where ISBN = '".$isbn."'";
            $rows = $this->db->query($sql);
            //return $rows->rowCount();
            if($rows->rowCount() == 0){
                return true;
            }else{
                return false;
            }
        }

        //Funcion para insertar producto en la base de datos
        public function insertar()
        {
            $sql = "INSERT INTO producto (ISBN,nombre, descripcion, imagen, precio, stock, categoria, autor) VALUES ('".$this->isbn."','".$this->nombre."', '".$this->descripcion."', '".$this->imagen."', '".$this->precio."', '".$this->stock."', '".$this->categoria."','".$this->autor."')";
            $this->db->query($sql);
            //return $this;   
            return $sql;
        }

        //Funcion para eliminar producto
        public function eliminar()
        {
            $sql = "DELETE FROM producto WHERE ISBN = '".$this->isbn."'";
            $this->db->query($sql);
            //return $this;
            return $sql;
        }

        //Funcion para obtener un array de todos lo productos
        public function listadoProductos(){
            $sql = "SELECT * FROM producto";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        //Funcion para obtener array del producto
        public function listadoProducto(){
            /*$sql = "SELECT * FROM producto WHERE ISBN = '".$this->isbn."'";*/
            $sql ="SELECT producto.*, valoraciones.comentario, valoraciones.correoCliente,valoraciones.valoracion 
             FROM `producto` INNER JOIN `valoraciones` ON producto.ISBN = valoraciones.ISBN WHERE producto.ISBN = '".$this->isbn."'";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }
          //Funcion para obtener la media del producto 
          public function listadoProducto2(){
            $sql ="SELECT AVG(valoraciones.valoracion) AS media, COUNT(valoraciones.ISBN) AS cuenta 
            FROM `producto` INNER JOIN `valoraciones` ON producto.ISBN = valoraciones.ISBN WHERE producto.ISBN = '".$this->isbn."'";
           $rows = $this->db->query($sql);
           return $rows->fetchAll(PDO::FETCH_CLASS);
          }


        //Funcion para editar un producto
        public function editar(){
            $sql = "UPDATE producto SET ISBN = '".$this->isbn."', nombre = '".$this->nombre."', descripcion = '".$this->descripcion."', precio = '".$this->precio."', stock =
            '".$this->stock."', categoria = '".$this->categoria."', autor =
            '".$this->autor."' WHERE ISBN = '".$this->isbn."'";
            $this->db->query($sql);
            //return $this;
        }
        
        //Funcion para editar imagen
        public function editarImagen(){
            $sql = "UPDATE producto SET imagen = '".$this->imagen."' WHERE ISBN = '".$this->isbn."'";
            $this->db->query($sql);
            //return $this;
        }
        
        //Funcion para editar destacado
        public function editarDestacado(){
            $sql = "UPDATE producto SET destacado = '".$this->destacado."' WHERE ISBN = '".$this->isbn."'";
            $this->db->query($sql);
            //return $this;
        }

        //Funcion para saber si el producto esta activado o descativado
        public function obtenerEstado(){
            $sql = "SELECT estado FROM producto WHERE ISBN = '".$this->isbn."'";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        //Funcion para Activar/desactivar producto
        public  function activar(){
            $sql = "UPDATE producto SET estado = '".$this->estado."' WHERE ISBN = '".$this->isbn."'";
            $this->db->query($sql);
        }

        //Funcion para enlistar los productos destacados
        function listadoProductosDestacados(){
                
            $sql = "SELECT producto.*,COUNT(*) FROM `producto` INNER JOIN `detallepedido` on `detallepedido`.`ISBN`=`producto`.`ISBN` WHERE `producto`.`stock`>0 GROUP BY `producto`.`ISBN` ORDER BY COUNT(*) DESC LIMIT 5 ";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);

        }

        //Funcion para enlistar los productos de un carrito
        public function listadoCarrito($listaIsbn){
            if(count($listaIsbn) == 1){
                $sql = "SELECT * FROM producto WHERE ISBN = $listaIsbn[0]";
            }else{
                $sql = "SELECT * FROM producto WHERE ISBN in (".implode(",",$listaIsbn).")";
            }
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
            //return $sql;
        }

        //Funcion para enlistar los productos buscados por el buscador
        public function buscador($nombre)
        {
            $sql = "SELECT * FROM producto WHERE nombre LIKE '%".$nombre."%'";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        //Funcion para actualizar el stock del producto
        public function updateStock()
        {
            $sql = "UPDATE producto set stock = '".$this->stock."' WHERE ISBN = '".$this->isbn."'";
            $this->db->query($sql);
        }

        //FUNCION PARA OBTENER STOCK DEL PRODUCTO
        public function obtenerStock(){
            $sql = "SELECT `stock` FROM producto WHERE ISBN = '".$this->isbn."'";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }
}
?>