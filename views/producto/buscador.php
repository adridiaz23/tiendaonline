<?php 
    echo "<div class='tituloBuscador'>";
        echo '<h2>Resultados encontrados de "'.$_POST['buscador'].'"</h2>';
    echo "</div>";
    echo "<div class='containerBuscador'>";
    foreach($listadoProductos as $clave =>$valor){
        echo "<div class='productoBuscador".(($clave+1)%4)."'>";
            echo "<div class='imagenBuscador'>";
                echo "<a href='index.php?controller=Producto&action=paginaProducto&isbn=".$valor->ISBN."'><img src='".$valor->imagen."'></img></a>";
            echo "</div>";
            echo "<div class='textoBuscador'>";
                echo "<p><a href='index.php?controller=Producto&action=paginaProducto&isbn=".$valor->ISBN."'>".$valor->nombre."</a></p>";
            echo "</div>";
        echo "</div>";
    }
    echo "</div>";   
?>