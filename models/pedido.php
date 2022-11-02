<?php
// Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Pedido extends Database{
        private $idPedido;
        private $fechaPeticion;
        private $estado;
        private $importeTotal;

        public function getIdPedido()
        {
                return $this->idPedido;
        }
        public function setIdPedido($idPedido)
        {
                $this->idPedido = $idPedido;

                return $this;
        }
        public function getFechaPeticion()
        {
                return $this->fechaPeticion;
        }
        public function setFechaPeticion($fechaPeticion)
        {
                $this->fechaPeticion = $fechaPeticion;

                return $this;
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
        public function getImporteTotal()
        {
                return $this->importeTotal;
        }
        public function setImporteTotal($importeTotal)
        {
                $this->importeTotal = $importeTotal;

                return $this;
        }
        function mostrarPedidos(){   
            // Consulta
            $sql = "SELECT * FROM pedido";
            $rows = $this->db->query($sql);
            return  $rows;
        }

        function mostrarPedido($idPedido){
            // Consulta
            $sql = "SELECT * FROM pedido WHERE idPedido = $idPedido";
            $rows = $this->db->query($sql);

        }
        function editarEstado(){
                // Consulta
                $sql = "UPDATE pedido SET estado = 1 WHERE idPedido = $idPedido";
                $this->db->query($sql);
                $sql = "UPDATE pedido SET estado = '".$this->destacado."' WHERE ISBN = '".$this->isbn."'";
                $this->db->query($sql);
                //return $this;
        }

    }

?>