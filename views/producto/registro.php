
<div class="header">
    <h1 class='tituloRegistroProducto'>Registro Producto</h1>
<!--Contenido antes de las olas-->
    <div class="inner-headerProducto flex">
         <div class="fromGenerico">
            <!-- Creamos el formulario donde su action será pasar los datos al model/loginAdmin y su función validar -->
            <form action="index.php?controller=Producto&action=registrar" method="POST" enctype="multipart/form-data">
                <div style=" float: left; width: 45%; text-align: justify;">

                    <label for='ISBN'>ISBN:</label>
                    <input type="text" name = "isbn" require>

                    <label for='Nombre'>Nombre:</label>
                    <input type="text" name = "nombre" require>

                    <label for='Descripcion'>Descripcion:</label>
                    <textarea class="textareaRegistroForm" name="descripcion" rows="2" cols="25"></textarea>


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

                    <label for='imagen'>Imagen:</label>
                    <div class="upload-btn-wrapper1">
                      <button class="btn1">Subir Imagen</button>
                      <input type="file" name="myfile" />
                    </div>

                </div>
                <div class="buttonSubmitProducto">
                    <input type="submit" value="Registrarse" class="rainbowButton" >
                </div>
                
            </form>
        </div>
    </div>