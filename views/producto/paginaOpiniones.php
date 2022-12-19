
<div class="fromGenericoOpiniones">
    <!-- Creamos el formulario donde su action será pasar los datos al model/loginAdmin y su función validar -->

    <form action="index.php?controller=Cliente&action=validarOpinion" method="POST">

            <label for="valoracion">Valoracion:</label>
            
            <div class="valoracion">
                <input id="radio1" type="radio" name="estrellas" value="5">
                <label for="radio1">★</label>
                <input id="radio2" type="radio" name="estrellas" value="4">
                <label for="radio2">★</label>
                <input id="radio3" type="radio" name="estrellas" value="3">
                <label for="radio3">★</label>
                <input id="radio4" type="radio" name="estrellas" value="2">
                <label for="radio4">★</label>
                <input id="radio5" type="radio" name="estrellas" value="1">
                <label for="radio5">★</label>
            </div>
    
            <label for='descripcion'>Descripcion:</label>
                <input type="text" name = "descripcion" require>

        <div class="buttonSubmit">
            <input type="submit" value="Enviar Opinion" class="rainbowButton" >
        </div>

    </form>
</div>