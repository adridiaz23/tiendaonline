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

        //Función que muestra todos los pedidos
        function mostrarPedidos(){   
                $sql = "SELECT * FROM pedido";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        function mostrarPedido(){
                $sql = "SELECT * FROM pedido WHERE idPedido = '".$this->idPedido."'";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        //Función para editar el estado del pedido
        function editarEstado(){
                $sql = "UPDATE pedido SET estado = '".$this->estado."' WHERE idPedido = '".$this->idPedido."'";
                $rows = $this->db->query($sql);
        }

        //Función para buscar solo por el estado del pedido
        function buscarEstado(){
               $sql = "SELECT * FROM pedido WHERE estado = ".$this->estado."";
               $rows = $this->db->query($sql);
               return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        //Función para buscar por solo el correo
        function buscarCorreo(){
                $sql = "SELECT * FROM pedido WHERE correoCliente LIKE '%".$this->correoCliente."%'";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

         //Función para buscar por el correo y el estado
        function buscarCorreoEstado(){
                $sql = "SELECT * FROM pedido WHERE correoCliente LIKE '%".$this->correoCliente."%' && estado = ".$this->estado."" ;
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        //Función para mostrar los detalles del pedido seleccionado
        function mostrarDetallePedido(){
                $sql = "SELECT * FROM detallepedido WHERE idPedido = '".$this->idPedido."'";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        //Funcion para listar los pedidos del cliente
           public function listarPedido($nomUsuario){
                $sql = "SELECT * FROM pedido WHERE correoCliente = '$nomUsuario'";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        } 

        
        //Funcion para mostrar los pedidos pagados del cliente.
        public function opiniones($nomUsuario){
                $sql = "SELECT producto.imagen, detallepedido.ISBN, pedido.estado, detallepedido.idPedido FROM (`detallepedido` INNER JOIN `pedido` ON detallepedido.idPedido = pedido.idPedido) INNER JOIN `producto`  ON detallepedido.ISBN = producto.ISBN WHERE pedido.correoCliente = '$nomUsuario'" ;
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

  
    

        //Funcion para saber el id del siguiente pedido
        public function ultimoPedido(){
                $sql = "SELECT idPedido FROM `pedido` order by idPedido DESC limit 1";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
        }

        public function insert(){
                $sql = "INSERT INTO `pedido` (`idPedido`, `correoCliente`, `fechaPeticion`, `estado`, `importeTotal`) VALUES (NULL, '".$this->correoCliente."', '".$this->fechaPeticion."', '0', '".$this->importeTotal."')";
                $this->db->query($sql);
        }
}