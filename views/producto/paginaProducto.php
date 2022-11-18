 <div class="contenedorPaginaProducto">
  <div class="imagenPaginaProducto">
    <?php
      echo "<img class='imagenPaginaProducto' src='".$listadoProducto[0]->imagen."' >";
    ?>
  </div>
  <div class="cajaPaginaProducto">
    <span></span>
    <div class="contenidoPaginaProducto">
      <?php
        echo "<h2 class= 'contenidoParesPaginaProducto'>".$listadoProducto[0]->nombre."</h2>";
        echo "<p>".$listadoProducto[0]->descripcion."</p>";
        echo "<a href='index.php?controller=Producto&action=paginaProducto&isbn=".$listadoProducto[0]->ISBN."'>Más información</a>";
        echo "<a href='index.php?controller=Base&action=añadirCarrito&isbn=".$listadoProducto[0]->ISBN."&cantidad=1'>Añadir al carrito</a>";
      ?>
    </div>
    </div>
  </div>
</div> 
