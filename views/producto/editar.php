<h1>Editar Producto</h1>
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
    foreach($listaCategorias as $clave => $valor){
        if($valor['idCategoria'] == $lista[0]->categoria){
            echo "<option value='".$valor['idCategoria']."' selected>".$valor['nombre']."</option>";
        }else{
            echo "<option value='".$valor['idCategoria']."'>".$valor['nombre']."</option>";
        } 
    }
    ?>
    </select>
    <br>
    Autor:
    <input type="text" name = "autor" value=<?php echo $lista[0]->autor; ?>><br>
    <input type = "submit" value="Editar">
</form>