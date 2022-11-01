<?php
    // Validamos la sesión de Admin si no ejecutamos el else.
    if(isset($_SESSION["Administrador"])){
        
        //echo "<meta http-equiv='Refresh' content='2;  url= index.php?controller=Admin&action=login'>";
        echo "<h1> Bienvenido! </h1>";
        
    }else{
        echo "<h1> Nombre o contraseña incorrectos </h1>";
        echo "<meta http-equiv='Refresh' content='2;  url= index.php?controller=Admin&action=login'>";
    }
?>