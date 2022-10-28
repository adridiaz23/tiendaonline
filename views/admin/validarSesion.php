<?php
    // Validamos la sesión de Admin si no ejecutamos el else.
    if(isset($_SESSION["Administrador"])){
        
        //echo "<meta http-equiv='Refresh' content='2;  url= index.php?controller=Admin&action=login'>";
        echo "<h1> Bienvenido! </h1>";
        echo "<li> <a href= 'index.php?controller=Pedido&action=mostrarPedidos' >Pedidos </a></li>";
        echo "<li> <a href= 'index.php?controller=Categoria&action=crearForm' >Crear catgoria </a></li>";
        echo "<li> <a href= 'index.php?controller=Producto&action=registrar' >Crear Producto </a></li>";
    }else{
        echo "<h1> Nombre o contraseña incorrectos </h1>";
        echo "<meta http-equiv='Refresh' content='2;  url= index.php?controller=Admin&action=login'>";
    }
?>