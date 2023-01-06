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
        
        //FUNCION PARA DEVOLVER TODOS LOS DETALLES DEL PEDIDO MEDIANTO SU ID PEDIDO GLOBAL
        public function obtenerDetallePedido()
        {
            $sql = "SELECT * FROM detallePedido WHERE idPedido = '".$this->idPedido."'";
            $rows = $this->db->query($sql);
            return $rows->fetchAll(PDO::FETCH_CLASS);
        }


        public function insert()
        {
            $sql = "INSERT INTO `detallepedido` (`idDetallePedido`, `ISBN`, `unidades`, `idPedido`) VALUES (NULL, '".$this->ISBN."', '".$this->unidades."', '".$this->idPedido."');";
            $this->db->query($sql);
        }

}    
?>