<?php
class Modelo{
    
    private $Modelo;
    private $db;
    
    public function contruct(){ //recibir los datos del contructor
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=tiendandavirtual',"root",""); //conexion a la bdd
    }

    
}