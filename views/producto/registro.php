<!--<div class='containerRegistroProducto'>
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
            /*foreach($listaCategorias as $clave => $valor){
                echo "<option value='".$valor['idCategoria']."'>".$valor['nombre']."</option>";
            }*/
            ?>
            </select>

            <label for='Autor'>Autor:</label>
            <input type="text" name = "autor">

            <input type = "submit" value="Registrar">

        </form>
    </div>
</div>-->

<div class="header">
    <h1 class='tituloRegistroProducto'>Registro Producto</h1>
<!--Contenido antes de las olas-->
    <div class="inner-headerProducto flex">
         <div class="fromGenerico">
            <!-- Creamos el formulario donde su action será pasar los datos al model/loginAdmin y su función validar -->
            <form action="index.php?controller=Cliente&action=registrarCliente" method="POST">
                <div style=" float: left; width: 45%; text-align: justify;">

                    <label for='Nombre'>Nombre:</label>
                    <input type="text" name = "nombre" requiere>

                    <label for='Descripcion'>Descripcion:</label>
                    <input type="text" name = "descripcion" require>

                    <label for='Precio'>Precio:</label>
                    <input type="number" name = "precio" require>
                </div>
                <div style="float: right; width: 45%; text-align: justify;">
                    <label for='Stock'>Stock:</label>    
                    <input type="number" name = "stock" require>

                    <label for='Categoria'>Categoria:</label>  
                    <select name="categoria" id="categoria" class='selectProducto'>
                    <option value='' selected disabled class='optionProducto'></option>
                        <?php
                        foreach($listaCategorias as $clave => $valor){
                            echo "<option value='".$valor['idCategoria']."' class='optionProducto'>".$valor['nombre']."</option>";
                        }
                        ?>
                    </select>

                    <label for='Autor'>Autor:</label>
                    <input type="text" name = "autor">

                </div>
                <div class="buttonSubmitProducto">
                    <input type="submit" value="Registrarse" class="rainbowButton" >
                </div>
                
            </form>
        </div>
    </div>