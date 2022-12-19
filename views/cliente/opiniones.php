<div class= "containerOpinines">
<?php
    foreach ($listadoPedido as $clave => $valor){
        ?>
        <div class="imagenHome">
        <?php
        echo "<div class='div1Carrito'><a href='index.php?controller=Cliente&action=paginaOpiniones&isbn=".$valor->ISBN."'><img class='imagenCarrito' src='$valor->imagen' /></a></div>";
        ?>
            <div class= "textOpiniones">
                    <p>Déjanos su valoración sobre este producto.<p>
            </div>
        </div>
        <?php
    }
?>
</div>