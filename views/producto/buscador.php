<?php 
    if(isset($listadoProductos) && count($listadoProductos) > 0){
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
    }else{
        echo "<div class='vacioCarrito'>";
            echo "<div class='iconoVacioCarrito'>";
            ?>
            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/bmnlikjh.json"
                trigger="loop"
                delay="2000"
                colors="primary:#006ac1"
                state="hover-1"
                style="width:150px;height:150px">
            </lord-icon>
            <?php
            echo "</div>";
            echo "<h1>Producto No Encontrado</h1>";
            echo "<p>Explora multitud de artículos a buen precio desde nuestra página principal</p>";
            echo "<p><a class='buttonCarrito' href='index.php'>Explorar Productos</a></p>";
        echo "</div>";
    }
?>