<ul>
    <?php

    if(isset($_SESSION["Administrador"])){
        echo "<li> <a href= 'index.php?controller=Pedido&action=mostrarPedidos' >Pedidos </a></li>";
        echo "<li> <a href= 'index.php?controller=Categoria&action=crearForm' >Crear catgoria </a></li>";
        echo "<li> <a href= 'index.php?controller=Producto&action=registrar' >Crear Producto </a></li>";
        echo "<li> <a href= 'index.php?controller=Producto&action=listado' >Listar Producto </a></li>";
        echo "<li> <a href= 'index.php?controller=Base&action=salir' >Salir </a></li>";
        
    }else{
        echo "<li> <a href= 'index.php?controller=Admin&action=login' >Login de Admin </a></li>";
    }

    ?>
    
</ul>