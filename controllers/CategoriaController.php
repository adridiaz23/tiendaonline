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

    public function productosDeCate(){
        $categoria = new Categoria("");
        $categoria->setIdCategoria($_GET['idCategoria']);
        $productosDeCate = $categoria->productosDeCate();
        require_once("views/categorias/productosDeCate.php");    

     } 
    
    //Funcion para coger las 5 categorias con mas productos para ponerla en el menu
    public function categoriasMenu(){
        require_once("models/categoria.php"); 
        $categoria = new Categoria("");
        $categorias =  $categoria->categoriasMenu();
        require_once "views/general/header.php";
    }


}