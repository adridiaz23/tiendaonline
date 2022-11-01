<?php
include("models/categoria.php");
class CategoriaController{
    public function crearForm(){
        require_once("views/categorias/CrearCategoria.php");    
        
    }

    public function insertarCategoria(){
       $categoria = new Categoria($_POST['name']);
       $categoria->crearCategoria();
    } 




}