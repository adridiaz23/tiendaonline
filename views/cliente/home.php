<div class="productos">
  <?php
  $i = 1;
  foreach($lista as $clave => $valor){
    echo "<div class='producto$i '> "?>
    <div class="contenedorProducto">
      <div class="imagenHome">
        <?php
          echo "<img class='imagenHome' src='".$valor->imagen."' >";
        ?>
      </div>
      <div class="cajaProducto">
        <span></span>
        <div class="contenidoProducto">
          <?php
            echo "<h2>$valor->nombre</h2>";
            echo "<p>$valor->descripcion</p>";
            echo "<a href='#'>Más información</a>";
            echo "<a href='index.php?controller=Base&action=añadirCarrito&isbn=".$valor->ISBN."&cantidad=1'>Añadir al carrito</a>";
          ?>
        </div>
        </div>
      </div>
    </div>
  <?php
  $i= $i+1;
  }
  ?>
</div>




