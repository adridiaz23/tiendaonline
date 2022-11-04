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

    public function mostrarCategorias(){
        // Mientras no se pasen los datos del formulario mostraremos el else
        if(isset($_SESSION["Administrador"])){
            require_once("models/categoria.php"); 
            $categoria = new Categoria("");
            $categorias =  $categoria->mostrarCategorias();
            require_once "views/categorias/mostrarCategorias.php";
        } else {
            header("index.php");
        }
}


}