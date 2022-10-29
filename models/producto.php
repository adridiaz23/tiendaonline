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

        //FUNCIONES

        //Funcion para saber si ya tenemos creado un producto con este ISBN
        public function validar($isbn){
            // Consulta
            $sql = "SELECT * FROM admin where ISBN = '$isbn'";
            $rows = $this->db->query($sql);
            return  $rows->rowCount();
        }

        //Funcion para insertar producto en la base de datos
        public function insertar()
        {
            $sql = "INSERT INTO producto (ISBN,nombre, descripcion, imagen, precio, stock, categoria, autor) VALUES ('".$this->isbn."','".$this->nombre."', '".$this->descripcion."', '".$this->imagen."', '".$this->precio."', '".$this->stock."', '".$this->categoria."','".$this->autor."')";
            $this->db->query($sql);
            return $this;   
        }

}
?>