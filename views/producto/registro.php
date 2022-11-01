<h1>Registro Producto</h1>
<form action="index.php?controller=Producto&action=registrar" method="post" enctype="multipart/form-data">
    ISBN:
    <input type="number" name = "isbn"><br>
    Nombre:
    <input type="text" name = "nombre"><br>
    Descripcion:
    <input type="text" name = "descripcion"><br>
    Imagen:
    <input type="file" name = "imagen"><br>
    Precio:
    <input type="number" name = "precio"><br>
    Stock:
    <input type="number" name = "stock"><br>
    Categoria:
    <input type="text" name = "categoria"><br>
    Autor:
    <input type="text" name = "autor"><br>
    <input type = "submit" value="Registrar">
</form>