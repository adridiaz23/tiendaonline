<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(count($lista) > 0){
            echo "<table class='tablaAdmin'>";
            echo "<tr>";
            //foreach($lista as $clave => $valor){
                foreach($lista[0] as $clave1 => $valor1){
                    echo "<th class='thAdmin'>".$clave1."</th>";
                }
            //}
            echo "<th class='thAdmin'>Editar</th>";
            echo "<th class='thAdmin'>Editar Imagen</th>";
            echo "<th class='thAdmin'>Eliminar</th>";
            echo "<tr>";
            foreach($lista as $clave => $valor){
                echo "<tr>";
                foreach($valor as $clave1 => $valor1){
                    if($clave1 == 'imagen'){
                        echo "<td class='tdAmin'><img class='imagenAdmin' src='".$valor1."' ></td>";
                    }elseif($clave1 == 'destacado'){
                        if($valor1 == 0){
                            echo "<td class='tdAmin'><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&destacado=1'><img src='views/producto/imagenes/destacadoNo.png' /></a></td>";
                        }else{
                            echo "<td class='tdAmin'><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&destacado=0'><img src='views/producto/imagenes/destacadoSi.png' /></a></td>";
                        }
                    }
                    else{
                        echo "<td class='tdAmin'>$valor1</td>";
                    }

                }
                echo "<td class='tdAmin'><a href='index.php?controller=Producto&action=editar&isbn=".$valor->ISBN."'>Editar</a></td>";
                echo "<td class='tdAmin'><a href='index.php?controller=Producto&action=editarImagen&isbn=".$valor->ISBN."'>Editar</a></td>";
                echo "<td class='tdAmin'><a href='index.php?controller=Producto&action=eliminar&isbn=".$valor->ISBN."'>Eliminar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "No hay productos";
        }
    ?>
</body>
</html>
