<?php
// Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Favorito extends Database{
        private $isbn;
        private $correoCliente;

        public function getIsbn()
        {
                return $this->isbn;
        }

        
        public function setIsbn($isbn)
        {
                $this->isbn = $isbn;
        }

         
        public function getCorreoCliente()
        {
                return $this->correoCliente;
        }

        public function setCorreoCliente($correoCliente)
        {
                $this->correoCliente = $correoCliente;
        }

        public function comprobarFavorito(){
            $sql = "SELECT * FROM `favoritos` where `correoCliente` = '".$this->correoCliente."' and `ISBN` = '".$this->isbn."'";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        public function insert(){
            $sql = "INSERT INTO `favoritos` (`correoCliente`, `ISBN`) VALUES ('".$this->correoCliente."', '".$this->isbn."')";
            $this->db->query($sql);
        }
}