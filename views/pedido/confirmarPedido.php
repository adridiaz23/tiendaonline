<html>
    <h3 class='tituloConfirmarPedido'>Confirmacion de Pedido Realizado</h3>
    <div class="contenedorConfirmarPedido">
        <div class="contenedorConfirmarPedido1">
            <?php
                foreach($listaProductos as $key => $value) {
                    echo "<div class='productoConfirmarPedido".$key."'>";
                        echo "<div class='imagenConfirmarPedido'>";
                            echo "<a href='index.php?controller=Producto&action=paginaProducto&isbn=".$value[0]->ISBN."'><img src='".$value[0]->imagen."'></a>";
                        echo "</div>";
                        echo "<div class='textoConfirmarPedido'>";
                            echo "<p><a href='index.php?controller=Producto&action=paginaProducto&isbn=".$value[0]->ISBN."' class='linkConfirmarPedido'><b>".$value[0]->nombre."</b></a><br>".$value[0]->descripcion."</p>";
                            if($listaDetallePedido[$key]->unidades > 1){
                                echo "<p>".$listaDetallePedido[$key]->unidades." Unidades</p>";
                                echo "<p><b>".intval($value[0]->precio)*$listaDetallePedido[$key]->unidades." €</b></p>";
                                echo "<p>Precio por unidad ".intval($value[0]->precio)." €</p>";
                            }else{
                                echo "<p>1 Unidad</p>";
                                echo "<p><b>".intval($value[0]->precio)." €</b></p>";
                            }
                            echo "<p>Entrega a domicilio</p>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class="contenedorConfirmarPedido2">
            <div class="resumenConfirmarPedido">
                <p class="resumenConfirmarPedido">Resumen</p>
            </div>
            <div class="subtotalConfirmarPedido">
                <div class="subtotalConfirmarPedido1">
                    <p class="textoIzqConfirmarPedido">Subtotal</p>
                    <p class="textoIzqConfirmarPedido">Coste de envio</p>
                </div>
                <div class="subtotalConfirmarPedido2">
                    <p class="textoDerConfirmarPedido"><?php echo $listaPedido[0]->importeTotal ?> €</p>
                    <p class="textoDerConfirmarPedido">Gratis</p>
                </div>
            </div>
            <div class='totalConfirmarPedido'>
                <div class="totalConfirmarPedido1">
                    <p class="textoIzqConfirmarPedido">Total</p>
                </div>
                <div class="subtotalConfirmarPedido2">
                    <p class="textoDerConfirmarPedido"><?php echo $listaPedido[0]->importeTotal ?> €</p>
                </div>
            </div>
            <div class="wrapperBoton">
              <a class="botonConfirmarPedido" href="index.php?controller=Cliente&action=home">Continuar</a>
            </div>
        </div>
    </div>
</html>