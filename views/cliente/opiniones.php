<?php
    foreach ($listadoPedido as $clave => $valor){
        ?>
        <div class="imagenHome">
        <?php
        echo "<img class='imagenHome' src='".$valor->imagen."' >";
        ?>
        </div>
        <div class="valoracion">
            <form method='post' action='index.php?controller=Cliente&action=opiniones'>
                <input id="radio1" name="estrellas" value="5" type='submit'>
                <label for="radio1">★</label>
                <input id="radio2" name="estrellas" value="4" type='submit'>
                <label for="radio2">★</label>
                <input id="radio3" name="estrellas" value="3" type='submit'>
                <label for="radio3">★</label>
                <input id="radio4" name="estrellas" value="2" type='submit'>
                <label for="radio4">★</label>
                <input id="radio5" name="estrellas" value="1" type='submit'>
                <label for="radio5">★</label>
            </form>
        </div>
        <?php
    }
?>