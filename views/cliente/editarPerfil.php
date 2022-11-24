<h1>Editar Perfil</h1>
<form action="index.php?controller=Cliente&action=editarPerfil" method="post">
    Nombre:
    <input type="text" name = "nombre" value=<?php echo $lista[0]->nombre; ?>><br>
    Apellido:
    <input type="text" name = "apellido" value=<?php echo $lista[0]->apellido; ?>><br>
    Calle:
    <input type="text" name = "calle" value=<?php echo $lista[0]->calle; ?>><br>
    Numero:
    <input type="number" name = "numero" value=<?php echo $lista[0]->numero; ?>><br>
    Codigo Postal:
    <input type="number" name = "codigoPostal" value=<?php echo $lista[0]->codigoPostal; ?>><br>
    Password:
    <input type="password" name = "password" value=<?php echo $lista[0]->password; ?>><br>
    <input type = "submit" value="Editar">
</form>