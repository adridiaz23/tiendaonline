<div class= "containerOpinines">
<?php
    $idPedido  = $_GET["idPedido"];
    foreach ($listadoPedido as $clave => $valor){

        if ($valor->idPedido == $idPedido){
            ?>
            <div class="imagenHome imagenOpiones">
            <?php
            if ($valor->estado == 1){
            echo "<div class='div1Carrito'><a href='index.php?controller=Cliente&action=paginaOpiniones&isbn=".$valor->ISBN."'><img class='imagenCarrito' src='$valor->imagen' /></a></div>";
            ?>
                <div class= "textOpiniones">
                        <p>Déjanos su valoración sobre este producto.<p>
                </div>
            </div>
            <?php
            }elseif($valor->estado == 0){
                echo "<div class='div1Carrito'><img class='imagenCarrito' src='$valor->imagen' /></div>";
                ?>
                    <div class= "textOpiniones">
                            <p>Tu pedido aun esta en reparto.<p>
                    </div>
                </div>
                <?php
            }
        }
    }
?>
</div>