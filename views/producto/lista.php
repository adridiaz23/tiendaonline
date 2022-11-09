<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="botonAdmin">
        <a class="enlaceAdmin" href="index.php?controller=Producto&action=registrar">Nuevo Producto</a>
    </div>
    <?php 
        if(count($lista) > 0){
            echo "<table class='tablaAdmin'>";
            echo "<tr>";
                foreach($lista[0] as $clave1 => $valor1){
                    if($clave1 != 'estado'){
                        echo "<th class='thAdmin'>".$clave1."</th>";
                    }
                }
            //}
            echo "<th class='thAdmin'>Editar</th>";
            echo "<th class='thAdmin'>Editar Imagen</th>";
            echo "<th class='thAdmin'>Estado</th>";
            echo "<tr>";
            foreach($lista as $clave => $valor){
                echo "<tr>";
                foreach($valor as $clave1 => $valor1){
                    if($clave1 == 'imagen'){
                        echo "<td class='tdAdmin'><img class='imagenAdmin' src='".$valor1."' ></td>";
                    }elseif($clave1 == 'destacado'){
                        if($valor1 == 0){
                            echo "<td class='tdAdmin'><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&destacado=1' class='enlaceDestacado'><img src='views/css/assets/imagenes/destacadoNo.png' class='destacado' /></a></td>";
                        }else{
                            echo "<td class='tdAdmin'><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&destacado=0' class='enlaceDestacado'><img src='views/css/assets/imagenes/destacadoSi.png' class='destacado' /></a></td>";
                        }
                    }
                    elseif($clave1 != 'estado'){
                        echo "<td class='tdAdmin'>$valor1</td>";
                    }

                }
                echo "<td class='tdAdmin'><a href='index.php?controller=Producto&action=editar&isbn=".$valor->ISBN."'><img src='views/css/assets/imagenes/editarproducto.png' /></a></td>";
                echo "<td class='tdAdmin'><a href='index.php?controller=Producto&action=editarImagen&isbn=".$valor->ISBN."'><img src='views/css/assets/imagenes/editarimagen.png' /></a></td>";
                echo "<td class='tdAdmin'><a class='enlaceActivado' href='index.php?controller=Producto&action=activar&isbn=".$valor->ISBN."'>";
                if($valor->estado == 0){
                    echo "<img class='activado' src='views/css/assets/imagenes/desactivado.png' />";
                }else{
                    echo "<img class='activado' src='views/css/assets/imagenes/activado.png' />";
                }
                echo "</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "No hay productos";
        }
    ?>
</body>
</html>
