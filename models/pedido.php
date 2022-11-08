<?php
// Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Pedido extends Database{
        private $idPedido;
        private $correoCliente;
        private $fechaPeticion;
        private $estado;
        private $importeTotal;

        public function getIdPedido(){
                return $this->idPedido;
        }
        public function setIdPedido($idPedido){
                $this->idPedido = $idPedido;

                return $this;
        }
        public function getFechaPeticion(){
                return $this->fechaPeticion;
        }
        public function setFechaPeticion($fechaPeticion){
                $this->fechaPeticion = $fechaPeticion;
                return $this;
        }
        public function getEstado(){
                return $this->estado;
        }
        public function setEstado($estado){
                $this->estado = $estado;

                return $this;
        }
        public function getImporteTotal(){
                return $this->importeTotal;
        }
        public function setImporteTotal($importeTotal){
                $this->importeTotal = $importeTotal;

                return $this;
        }
        public function getCorreoCliente() {
                return $this->correoCliente;
        }
        public function setCorreoCliente($correoCliente){
                $this->correoCliente = $correoCliente;
                return $this;
        }
        function mostrarPedidos(){   
                // Consulta
                $sql = "SELECT * FROM pedido";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }
        function mostrarPedido($idPedido){
                // Consulta
                $sql = "SELECT * FROM pedido WHERE idPedido = $idPedido";
                $rows = $this->db->query($sql);
        }
        function editarEstado(){
                // Consulta
                $sql = "UPDATE pedido SET estado = '".$this->estado."' WHERE idPedido = '".$this->idPedido."'";
                $this->db->query($sql);
                //return $this;
        }
        function buscarEstado(){
               // Consulta
               $sql = "SELECT * FROM pedido WHERE estado = ".$this->estado."";
               $rows = $this->db->query($sql);
               return $rows->fetchAll(PDO::FETCH_CLASS);
        }
        function buscarCorreo(){
                // Consulta
                $sql = "SELECT * FROM pedido WHERE correoCliente LIKE '%".$this->correoCliente."%'";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }
        function buscarCorreoEstado(){
                $sql = "SELECT * FROM pedido WHERE correoCliente LIKE '%".$this->correoCliente."%' && estado = ".$this->estado."" ;
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }


        function mostrarDetallePedido(){
                $sql = "SELECT * FROM detallepedido WHERE idPedido = '".$this->idPedido."'";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }
    }

?>