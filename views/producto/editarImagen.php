<?php 
    /*echo "<h2>Tu imagen actual:<h2><br>";
    echo "<img src='".$lista[0]->imagen."'>";

    echo "<h2>Editar Imagen:<h2><br>";*/
?>
<!--<form action="index.php?controller=Producto&action=editarImagen" method="post" enctype="multipart/form-data">
    Imagen:
    <input type="file" name = "imagen"><br>
    <input type="hidden" name="isbn" value="<?php echo $_GET['isbn']; ?>" >
    <input type = "submit" value="Editar Imagen">
</form>-->


<div class="header">
    <h1 class='tituloRegistroProducto'>Editar Imagen</h1>
    <div class="inner-headerProducto flex">
         <div class="fromGenerico">
            <form action="index.php?controller=Producto&action=editarImagen" method="POST" enctype="multipart/form-data">
                <div style=" float: left; width: 45%; text-align: justify;display: flex;align-items: center;flex-direction: column;">

                <?php 
                    echo "<label for='img'>Imagen Actual:</label>";
                    echo "<img class='imagenEditarProducto' src='".$lista[0]->imagen."'>";

                ?>

                </div>
                <div style="float: right; width: 45%; text-align: justify;">
                    
                    <label for='imagen'>Nueva Imagen:</label>
                    <div class="upload-btn-wrapper1">
                      <button class="btn1">Subir Imagen</button>
                      <input type="file" name="imagen" />
                    </div>

                    <input type="hidden" name="isbn" value="<?php echo $_GET['isbn']; ?>" >

                </div>
                <div class="buttonSubmitProducto">
                    <input type="submit" value="Editar" class="rainbowButton" >
                </div>
                
            </form>
        </div>
    </div>