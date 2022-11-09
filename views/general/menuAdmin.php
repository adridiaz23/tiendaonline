<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        echo "<div class='menuAdmin'>";
            echo "<div class='menu1'>
                        <script src='https://cdn.lordicon.com/qjzruarw.js'></script>
                        <lord-icon
                            src='https://cdn.lordicon.com/wxnxiano.json'
                            trigger='morph'
                            colors='primary:#ffffff,secondary:#1663c7'
                            style='width:250px;height:50px'>
                        </lord-icon>
                  </div>";

            echo "<div class='menu2'><a href= 'index.php?controller=Pedido&action=mostrarPedidos' class='enlaceMenuAdmin'>Pedidos</a></div>";
            echo "<div class='menu3'><a href= 'index.php?controller=Producto&action=listado' class='enlaceMenuAdmin'>Productos</a></div>";
            echo "<div class='menu4'><a href= 'index.php?controller=Categoria&action=mostrarCategorias' class='enlaceMenuAdmin'>Categorias</a></div>";
            echo "<div class='menu5'><a href= 'index.php?controller=Base&action=salir' class='enlaceMenuAdmin'>Salir</a></div>";
        echo "</div>";
        echo "<div class='spacerAdmin'></div>";
        /*echo "<li> <a href= 'index.php?controller=Pedido&action=mostrarPedidos' >Pedidos </a></li>";
        echo "<li> <a href= 'index.php?controller=Categoria&action=crearForm' >Crear catgoria </a></li>";
        echo "<li> <a href= 'index.php?controller=Categoria&action=mostrarCategorias' >Mostrar catgoria </a></li>";
        echo "<li> <a href= 'index.php?controller=Producto&action=registrar' >Crear Producto </a></li>";
        echo "<li> <a href= 'index.php?controller=Producto&action=listado' >Listar Producto </a></li>";
        echo "<li> <a href= 'index.php?controller=Base&action=salir' >Salir </a></li>";*/
    ?>
</body>
</html>