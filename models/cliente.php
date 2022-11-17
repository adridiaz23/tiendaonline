<?php
    // Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Cliente extends Database{
        private $nombre;
        private $apellido;
        private $correoCliente;
        private $calle;
        private $numero;
        private $dni;
        private $password;
        private $codigoPostal;
        
        //Generamos los set y get.
        public function getNombre()
        {
                return $this->nombre;
        }
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
                return $this;
        }
        public function getApellido()
        {
                return $this->apellido;
        }
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;
                return $this;
        }
        public function getCorreoCliente()
        {
                return $this->correoCliente;
        }
        public function setCorreoCliente($correoCliente)
        {
                $this->correoCliente = $correoCliente;
                return $this;
        }
        public function getCalle()
        {
                return $this->calle;
        }
        public function setCalle($calle)
        {
                $this->calle = $calle;
                return $this;
        }
        public function getNumero()
        {
                return $this->numero;
        }
        public function setNumero($numero)
        {
                $this->numero = $numero;
                return $this;
        }
        public function getDni()
        {
                return $this->dni;
        }
        public function setDni($dni)
        {
                $this->dni = $dni;
                return $this;
        }
        public function getPassword()
        {
                return $this->password;
        } 
        public function setPassword($password)
        {
                $this->password = $password;
                return $this;
        }
        public function getCodigoPostal()
        {
                return $this->codigoPostal;
        }
        public function setCodigoPostal($codigoPostal)
        {
                $this->codigoPostal = $codigoPostal;
                return $this;
        }
        //Validar el inicio de sesion del cliente.
        function validarCliente(){   
                // Consulta
                $sql = "SELECT * FROM cliente where correoCliente='".$this->correoCliente."' and password= '".$this->password."'";
                $rows = $this->db->query($sql);
                return $rows->fetchAll(PDO::FETCH_CLASS);
            }

        //Registro de clientes.
        function registrarCliente(){
                 //Controlar que el cliente no este repetido
                $sql = "SELECT * FROM cliente where correoCliente='".$this->correoCliente."' and dni= '".$this->dni."'";
                $rows = $this->db->query($sql);
                //Si no lo esta ejecutamos esta parte
                if ($rows->rowCount() == 0){
                        $sql1= "INSERT INTO cliente (nombre, apellido, correoCliente, calle, numero, dni, password, codigoPostal) VALUES ('".$this->nombre."','".$this->apellido."','".$this->correoCliente."','".$this->calle."','".$this->numero."','".$this->dni."','".$this->password."','".$this->codigoPostal."')";
                        $rows1 = $this->db->query($sql1);
                        return  $rows1->rowCount();
                }
                else{
                        return  $rows->rowCount();
                }
        }

      

        
    }