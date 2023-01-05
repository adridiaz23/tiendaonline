<!--<h1>Editar Producto</h1>
<form action="index.php?controller=Producto&action=editar" method="post">
    ISBN:
    <input type="number" name = "isbn" value=<?php echo $lista[0]->ISBN; ?>><br>
    Nombre:
    <input type="text" name = "nombre" value=<?php echo $lista[0]->nombre; ?>><br>
    Descripcion:
    <input type="text" name = "descripcion" value=<?php echo $lista[0]->descripcion; ?>><br>
    Precio:
    <input type="number" name = "precio" value=<?php echo $lista[0]->precio; ?>><br>
    Stock:
    <input type="number" name = "stock" value=<?php echo $lista[0]->stock; ?>><br>
    Categoria:
    <select name="categoria" id="categoria">
    <?php
    /*foreach($listaCategorias as $clave => $valor){
        if($valor['idCategoria'] == $lista[0]->categoria){
            echo "<option value='".$valor['idCategoria']."' selected>".$valor['nombre']."</option>";
        }else{
            echo "<option value='".$valor['idCategoria']."'>".$valor['nombre']."</option>";
        } 
    }*/
    ?>
    </select>
    <br>
    Autor:
    <input type="text" name = "autor" value=<?php echo $lista[0]->autor; ?>><br>
    <input type = "submit" value="Editar">
</form>-->


<div class="header">
    <h1 class='tituloRegistroProducto'>Editar Producto</h1>
    <div class="inner-headerProducto flex">
         <div class="fromGenerico">
            <form action="index.php?controller=Producto&action=editar" method="POST">
                <div style=" float: left; width: 45%; text-align: justify;">

                    <label for='ISBN'>ISBN:</label>
                    <input type="number" name = "isbn" value=<?php echo $lista[0]->ISBN; ?>>

                    <label for='Nombre'>Nombre:</label>
                    <input type="text" name = "nombre" value=<?php echo $lista[0]->nombre; ?>>

                    <label for='Descripcion'>Descripcion:</label>
                    <textarea class="textareaRegistroForm" name="descripcion" rows="2" cols="25"><?php echo $lista[0]->descripcion; ?></textarea>


                    <label for='Precio'>Precio:</label>
                    <input type="number" name = "precio" value=<?php echo $lista[0]->precio; ?>>
                </div>
                <div style="float: right; width: 45%; text-align: justify;">
                    <label for='Stock'>Stock:</label>    
                    <input type="number" name = "stock" value=<?php echo $lista[0]->stock; ?>>

                    <label for='Categoria'>Categoria:</label>  
                    <select name="categoria" id="categoria" class='selectProducto'>
                        <?php
                        foreach($listaCategorias as $clave => $valor){
                            if($valor['idCategoria'] == $lista[0]->categoria){
                                echo "<option value='".$valor['idCategoria']."' selected class='optionProducto'>".$valor['nombre']."</option>";
                            }else{
                                echo "<option value='".$valor['idCategoria']."' class='optionProducto'>".$valor['nombre']."</option>";
                            } 
                        }
                        ?>
                    </select>

                    <label for='Autor'>Autor:</label>
                    <input type="text" name = "autor" value=<?php echo $lista[0]->autor; ?>>

                </div>
                <div class="buttonSubmitProducto">
                    <input type="submit" value="Editar" class="rainbowButton" >
                </div>
                
            </form>
        </div>
    </div>