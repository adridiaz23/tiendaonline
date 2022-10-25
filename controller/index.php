<?php
require_once("model/index.php");

class modeloController{

    private $model;
    
    public function contruct(){ 
        $this->model = new Modelo();
    }

    //mostrar registros

    function index(){
        $producto = new Modelo();
        $dato = "Hola mundo"; //delcaramos los valores o datos que queremos mostrar y/o enviar
        require_once("views/index.php"); //redirigimos a la vista
    }
}