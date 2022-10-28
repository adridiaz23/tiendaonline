<!-- Creamos el formulario donde su action será pasar los datos al model/loginAdmin y su función validar -->

<form action="index.php?controller=admin&action=validar" method="POST">
    
    <label for="nombre">Usuario:</label>
    <input type="text" name="nombre" id="nombre" autofocus>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Iniciar sesión">
</form>
