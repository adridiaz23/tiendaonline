<?php
class UsuarioController{
    //El controller tiene las diferentes acciones que se pueden hacer 
    public function mostrarTodos(){
       
       require_once "models/usuario.php";
        $usuario = new Usuario();
        $todosLosUsuarios = $usuario->mostrarTodos();
        require_once "views/usuarios/mostrarTodos.php";
    }
    public function crear(){
        require_once "views/usuarios/crear.php";
    }
    public function alta(){
       if (isset($_POST)){
        //Falta acabar
        /* require_once "models/usuario.php";
         $usuario = new Usuario();
         $usuario->conectar();
         $usuario->insertar();*/
       }  

    }

    public function modificar(){
       echo "Estoy en modificar";
    }  
    public function eliminar(){
        echo "Estoy en eliminar";
    }  



//https://www.myprograming.com/php-mvc-step-by-step-live-project-example/
}
?>
