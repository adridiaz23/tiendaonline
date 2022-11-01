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
       
        public function setIdCategoria($idCategoria){
                $this->idCategoria = $idCategoria;
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
          
            $sql = "INSERT INTO categoria (IdCategoria,nombre) VALUES (NULL,'".$this->nombre."')";
            print($sql);
            $this->db->prepare($sql)->execute($this->nombre);

                

        }
}