<?php
    // Llamamos al fichero database.php
    require_once("database.php");
    // Hacemos que esta class sea hija de Database para poder heredar la conexión.
    class Admin extends Database{
        private $nombre;
        private $password;

        //Generamos los set y get.
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getPassword()
        {
            return $this->password;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
            return $this;
        }
        public function setPassword($password)
        {
            $this->password = $password;
            return $this;
        }

        // Creamos la función que tendrá que recoger el nombre y la contraseña del formulario.
        function validar($nombre, $password){
            // Validación de error
            if ($this->db == "ERROR") {
                header("controllers/SalirController.php");
            }

            // Consulta
            $sql = "SELECT * FROM admin where Nombre='$nombre' and Password= '$password'";
            $rows = $this->db->query($sql);
            return  $rows->rowCount();
        }
    }

?>