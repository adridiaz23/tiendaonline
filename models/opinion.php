<?php
// Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Opinion extends Database{
        private $idValoracion;
        private $ISBN;
        private $comentario;
        private $valoracion;
        private $correoCliente;


        public function getIdValoracion()
        {
                return $this->idValoracion;
        }

        public function setIdValoracion($idValoracion)
        {
                $this->idValoracion = $idValoracion;
                return $this;
        }
        
        public function getISBN()
        {
                return $this->ISBN;
        }

        public function setISBN($ISBN)
        {
                $this->ISBN = $ISBN;
                return $this;
        }

        public function getComentario()
        {
                return $this->comentario;
        }

        public function setComentario($comentario)
        {
                $this->comentario = $comentario;
                return $this;
        }

        public function getValoracion()
        {
                return $this->valoracion;
        }
        public function setValoracion($valoracion)
        {
                $this->valoracion = $valoracion;
                return $this;
        }

        public function getCorreoCliente()
        {
                return $this->correoCliente;
        }

        public function setICorreoCliente($correoCliente)
        {
                $this->correoCliente = $correoCliente;
                return $this;
        }

        //Funcion para insertar una nueva opinion sobre un prodcuto
        public function validarOpinion(){

            $sql = "INSERT INTO valoraciones (idOpinion, ISBN, comentario, valoracion, correoCliente) VALUES (NULL,'".$this->ISBN."', '".$this->comentario."','".$this->valoracion."','".$this->correoCliente."') ";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        public function opinionesProductos(){

                $sql = "SELECT * FROM valoraciones";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
            }
}