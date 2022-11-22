<?php
// Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class DetallePedido extends Database{
        private $idDetallePedido;
        private $ISBN;
        private $unidades;
        private $idPedido;

        public function getIdDetallePedido(){
            return $this->IdDetallePedido;
        }
        public function setIdDetallePedido($IdDetallePedido){
            $this->IdDetallePedido = $IdDetallePedido;
        }

        public function getISBN(){
            return $this->ISBN;
        }
        public function setISBN($ISBN){
            $this->ISBN = $ISBN;
        }

        public function getUnidades(){
            return $this->unidades;
        }
        public function setUnidades($unidades){
            $this->unidades = $unidades;
        }

        public function getIdPedido(){
            return $this->idPedido;
        }
        public function setIdPedido($idPedido){
            $this->idPedido = $idPedido;
        }

    }

?>