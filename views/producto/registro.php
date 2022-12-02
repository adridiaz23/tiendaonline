<div class='containerRegistroProducto'>
    <h1>Registro Producto</h1>
    <div class='divFormulario'>
        <form action="index.php?controller=Producto&action=registrar" method="post" enctype="multipart/form-data" class=''>
            <label for='isbn'>ISBN:</label>
            <input type="number" name = "isbn">

            <label for='Nombre'>Nombre:</label>
            <input type="text" name = "nombre">

            <label for='Descripcion'>Descripcion:</label>
            <input type="text" name = "descripcion">

            <label for='Imagen'>Imagen:</label>
            <input type="file" name = "imagen">

            <label for='Precio'>Precio:</label>
            <input type="number" name = "precio">

            <label for='Stock'>Stock:</label>    
            <input type="number" name = "stock">

            <label for='Categoria'>Categoria:</label>  
            <select name="categoria" id="categoria">
            <?php
            foreach($listaCategorias as $clave => $valor){
                echo "<option value='".$valor['idCategoria']."'>".$valor['nombre']."</option>";
            }
            ?>
            </select>

            <label for='Autor'>Autor:</label>
            <input type="text" name = "autor">

            <input type = "submit" value="Registrar">

        </form>
    </div>
</div>