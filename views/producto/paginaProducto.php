 
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
        echo "<p class= 'precioPaginaProducto'>".$listadoProducto[0]->precio."€"."</p>";
        if ($listadoProducto[0]->stock > 0){
          echo "<p>¡En stock! ¡Recíbelo mañana!</p>";
        }else{
          echo "<p>¡Sin stock! </p>";
        }
        echo "<div class= 'corazonPaginaProducto'>";
          echo "<a href='index.php?controller=detallePedido&action=añadirCarrito&isbn=".$listadoProducto[0]->ISBN."&cantidad=1'>Añadir al carrito</a>";
          echo "<a  class= 'corazonMargen' href='#'>Comprar</a>";
          echo "<a  class= 'corazonMargen' href='#'> "?>
            <script src='https://cdn.lordicon.com/qjzruarw.js'></script>
            <lord-icon
                src='https://cdn.lordicon.com/rjzlnunf.json'
                trigger='hover'
                colors='primary:#000000,secondary:#f30000'
                style='width:25px;height:20px'>
            </lord-icon> </a>
      </div>
      <?php
          echo "<h4>Autor: </h4>";
          echo "<p>".$listadoProducto[0]->autor."</p>";
          echo "<h4>Descripcion del Libro: </h4>";
          echo "<p>".$listadoProducto[0]->descripcion."</p>";
          ?>
    </div>
    </div>
  </div>
 
</div> 

