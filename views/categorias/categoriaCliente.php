<?php
echo "<div class='tituloHomeCliente'>";
    echo "<h1>". $listaCategoria[0]->nombreCategoria ."</h1>";
  echo "</div>";
  ?>
<div class="productosCategorias">
  <?php
  $i = 1;
  foreach($listaCategoria as $clave => $valor){
    echo "<div class='productoCategoria$i '> "?>
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
          
            echo "<h2 class= 'contenidoCategorias$i'>$valor->nombre</h2>";
            echo "<p class='descripcionCorta$i'>$descripcionCorta</p>";
    
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
