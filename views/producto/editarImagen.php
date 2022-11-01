<?php 
    echo "<h2>Tu imagen actual:<h2><br>";
    echo "<img src='".$lista[0]->imagen."'>";

    echo "<h2>Editar Imagen:<h2><br>";
?>
<form action="index.php?controller=Producto&action=editarImagen" method="post" enctype="multipart/form-data">
    Imagen:
    <input type="file" name = "imagen"><br>
    <input type = "submit" value="Editar Imagen">
</form>