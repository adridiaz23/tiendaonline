

<div class="header">
    <h1 class='tituloRegistroProducto'>Editar Perfil</h1>
    <div class="inner-headerProducto flex">
         <div class="fromGenerico">
            <form action="index.php?controller=Cliente&action=editarPerfil" method="POST">
            
                    <label for="Nombre">Nombre:</label>
                    <input type="text" name = "nombre" value=<?php echo $lista[0]->nombre; ?>><br>
                    <label for="Nombre">Apellido:</label>
                    <input type="text" name = "apellido" value=<?php echo $lista[0]->apellido; ?>><br>
                    <label for="Nombre">Calle:</label>
                    <input type="text" name = "calle" value=<?php echo $lista[0]->calle; ?>><br>
                    <label for="Nombre">Numero:</label>
                    <input type="number" name = "numero" value=<?php echo $lista[0]->numero; ?>><br>
                    <label for="Nombre">Codigo Postal:</label>
                    <input type="number" name = "codigoPostal" value=<?php echo $lista[0]->codigoPostal; ?>><br>
            
                <div class="buttonSubmitProducto">
                    <input type="submit" value="Editar" class="rainbowButton" >
                </div>
                
            </form>
        </div>
    </div>