<?php
require_once("database.php");
class Usuario extends Database {
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $fecha;
    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function getFecha() {
        return $this->fecha;
    }
    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }
    
    function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    function mostrarTodos(){
        $sql = "SELECT * FROM cliente";
        $rows = $this->db->query($sql);
        return $rows;
    }
    function insertar(){
        //Falta acabar
        $sql = "INSERT INTO cliente VALUES $this->";
    }

    
}




?>