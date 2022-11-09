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


    }