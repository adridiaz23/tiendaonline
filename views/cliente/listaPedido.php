
<?php
    echo "<h1 class='tituloCarrito'>Mis pedidos</h1>";
    echo "<div class='containerCarrito'>";
    echo "<div class='containerProductos'>";
        echo "<div class='productoCarrito'>";
            echo "<div class='div1Carrito'>Numero de pedido</div>";
            echo "<div class='div2Carrito'>correoCliente</div>";
            echo "<div class='div3Carrito'>fechaPeticion</div>";
            echo "<div class='div4Carrito'>importeTotal</div>";
       
            echo "</div>";  
           

    foreach ($listadoPedido as $clave => $valor){
 
        echo "<div class='productoCarrito'>";

            echo "<div class='div1Carrito'>".$valor->idPedido."</div>";
            echo "<div class='div2Carrito'>".$valor->correoCliente."</div>";
            echo "<div class='div3Carrito'>".$valor->fechaPeticion."</div>";
            echo "<div class='div4Carrito'>".$valor->importeTotal."</div>";
            echo "<div class='div5Carrito'><p><a href='index.php?controller=Cliente&action=opiniones&idPedido=".$valor->idPedido."'>Ver más</a></p></div>";

        echo "</div>";  
        
    }
    echo "</div>";  
    echo "</div>";  
?>
