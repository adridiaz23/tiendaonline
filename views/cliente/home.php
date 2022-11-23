<div class="tituloHomeCliente">
    <h1> LOS MÁS VENDIDOS</h1>
</div>
<div class="lineaTituloHomeCliente"> 
  <div class="lineaHome"></div>
</div>
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
          //Recotar el string 
          $descripcionCorta = substr($valor->descripcion, 0, 40)." ...";
          //Cambiar la clase dependiendo si es par o impar el div.
          if($i%2==0){
            echo "<h2 class= 'contenidoPares'>$valor->nombre</h2>";
            echo "<p>$descripcionCorta</p>";
          }else{
            echo "<h2  class= 'contenidoImpares'>$valor->nombre</h2>";
            echo "<p class= 'contenidoImpares'>$descripcionCorta</p>";
            
          }
            echo "<a href='index.php?controller=Producto&action=paginaProducto&isbn=".$valor->ISBN."'>Más información</a>";
            echo "<a href='index.php?controller=detallePedido&action=añadirCarrito&isbn=".$valor->ISBN."&cantidad=1'>Añadir al carrito</a>";
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




