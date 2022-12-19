<?php
// Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Opinion extends Database{
        private $idValoracion;
        private $comentario;
        private $valoracion;


        public function getIdValoracion()
        {
                return $this->idValoracion;
        }

        public function setIdValoracion($idValoracion)
        {
                $this->idValoracion = $idValoracion;
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


        public function validarOpinion(){

            $sql = " INSERT INTO valoraciones VALUES  (ISBN, comentario, valoracion) VALUES ('".$this->idValoracion."', '".$this->comentario."','".$this->valoracion."') ";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }
}