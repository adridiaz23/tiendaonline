<?php
    // Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Categoria extends Database{
        private $idCategoria;
        private $nombre;


        public function __construct($nombre){
                parent::__construct(); //llamar contructor padre para no sobreescribir y conectarme a la base de datos db
                $this->nombre = $nombre;
        }
        public function getIdCategoria(){
                return $this->idCategoria;
        }
       
        public function setIdCategoria($IdCategoria){
                $this->IdCategoria = $IdCategoria;
                return $this;
        }

        public function getNombre(){
                return $this->nombre;
        }

        public function setNombre($nombre){
                $this->nombre = $nombre;
                return $this;
        }

       
        public function crearCategoria(){
          
            $sql = "INSERT INTO categoria (idCategoria,nombre) VALUES (NULL,'".$this->nombre."')";
            //print($sql);
            $this->db->query($sql);
            return $sql;  
        }

        public function mostrarCategorias(){   
            // Consulta
            $sql = "SELECT * FROM categoria";
            $rows = $this->db->query($sql);
            return  $rows;
        }

        public function productosDeCate(){
             // Consulta
            $sql = "SELECT * FROM producto WHERE categoria = '".$this->IdCategoria."'";
            $rows = $this->db->query($sql);
            return  $rows->fetchAll(PDO::FETCH_CLASS);

        }
        //FUNCION PARA PARA LISTAR 5 CATEGORIAS CON MAS LIBROS PARA EL sMENU
        public function  categoriasMenu(){
                $sql = "SELECT categoria.nombre,COUNT(*) FROM `producto` INNER JOIN `categoria` ON categoria.idCategoria = producto.categoria GROUP by producto.categoria ORDER BY `COUNT(*)` DESC limit 5 ";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        
}