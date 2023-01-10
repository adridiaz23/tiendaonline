
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
        //Listar el contenido del libro
        echo "<h2 class= 'contenidoParesPaginaProducto'>".$listadoProducto[0]->nombre."</h2>";
        echo "<p class= 'precioPaginaProducto'>".$listadoProducto[0]->precio."€"."</p>";

        //Saber si el producto tiene stock o no.
        if ($listadoProducto[0]->stock > 5){
          echo "<p class='stockSi'>¡En stock! ¡Recíbelo mañana!</p>";
        }elseif($listadoProducto[0]->stock > 0 && $listadoProducto[0]->stock <=5){
          echo "<p class='stockBajo'> ¡¡Rápido, quedan pocos!! </p>";

        }
      
        else{
          echo "<p class='stockNo'>¡Sin stock! </p>";
        }
        //Apartado del añadir al carrito comrpar y el corazon.
        echo "<div class= 'corazonPaginaProducto'>";
        if ($listadoProducto[0]->stock > 0){
          echo "<a href='index.php?controller=detallePedido&action=añadirCarrito&isbn=".$listadoProducto[0]->ISBN."&cantidad=1'>Añadir al carrito</a>";
          echo "<a  class= 'corazonMargen' href='index.php?controller=DetallePedido&action=añadirCarrito&isbn=".$listadoProducto[0]->ISBN."&cantidad=1&comprar=si'>Comprar</a>";
        }
          echo "<a  class= 'corazonMargen2' href='index.php?controller=Producto&action=añadirFavorito&isbn=".$listadoProducto[0]->ISBN."'> "?>
            <script src='https://cdn.lordicon.com/qjzruarw.js'></script>
            <lord-icon
                class='lord-iconCorazon'
                src='https://cdn.lordicon.com/rjzlnunf.json'
                trigger='hover'
                colors='primary:#000000,secondary:#f30000'
                style='width:23px;height:23px'>
            </lord-icon> </a>
            <!--<script src='https://cdn.lordicon.com/qjzruarw.js'></script>
            <lord-icon
                src='https://cdn.lordicon.com/xryjrepg.json'
                trigger='hover'
                colors='primary:red,secondary:black'
                style='width:23px;height:23px'>
            </lord-icon>-->
        
      </div>
      <?php
          echo "<br>";
          echo "<h4>Autor: </h4>";
          echo "<p>".$listadoProducto[0]->autor."</p>";
          echo "<h4>Descripcion del Libro: </h4>";
          echo "<p>".$listadoProducto[0]->descripcion."</p>";
          echo "<h4>Valoracion: </h4>";
          echo "<div class='valoracion'>";
            for($i=1 ; $i<= 5 ; $i++ ){
                if ($i<=$listadoProducto3[0]->media){
                  echo "<font color=\"yellow\">★</font>";
                }else{
                  echo "★";
                }
            }
           echo " </div>";
           echo "</div>";
           echo "</div>";
           echo "</div>";

          

          echo "<div class=comentariosClientes>";
          echo "<h2>Valoraciones </h2>";
          if($listadoProducto3[0]->cuenta==0){
            echo "<h4>Sin valoraciones: </h4>";
          }else{
           for($i=0; $i<= $listadoProducto3[0]->cuenta ; $i++){
              foreach ($listadoProducto2 as $clave => $valor){
                echo "<div class=cajaComentariosClientes>";
                echo "<h4>Correo: </h4>";
                echo "<p>".$valor->correoCliente."</p>";
                echo "<h4>Comentario: </h4>";
                echo "<p>".$valor->comentario."</p>";
                echo "<h4>Valoracion: </h4>";
                echo "<div class='valoracion'>";
                for($i=1 ; $i<= 5 ; $i++ ){
                    if ($i<=$valor->valoracion){
                      echo "<font color=\"yellow\">★</font>";
                    }else{
                      echo "★";
                    }
                }
                echo " </div>";
                echo "</div>";
              }
          
            }
          }
            
            echo "</div>";
           ?>
    
  </div>
 
</div> 

