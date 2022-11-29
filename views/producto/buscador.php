<?php 
    echo "<div class='tituloBuscador'>";
        echo '<h2>Resultados encontrados de "'.$_POST['buscador'].'"</h2>';
    echo "</div>";
    echo "<div class='containerBuscador'>";
        echo "<div class='productoBuscador'>";
            echo "<div class='imagenBuscador'>";
                echo "<img src='".$listadoProductos[0]->imagen."'>";
            echo "</div>";
            echo "<div class='textoBuscador'>";
                echo "<p>".$listadoProductos[0]->nombre."</p>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>