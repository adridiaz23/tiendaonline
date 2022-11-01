<h2>Crear Categoria</h2> 
<form name="crearCategoria" method="POST" action="index.php?controller=Categoria&action=insertarCategoria" >
    <label for="name"> name:</label >
        <input type="text"  name="name" maxlength="30" id = "name" required /><br>
        <input type="submit" name="submit" value="enviar"/>        
</form>