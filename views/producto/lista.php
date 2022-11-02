<?php 
    if(count($lista) > 0){
        echo "<table border=1>";
        echo "<tr>";
        //foreach($lista as $clave => $valor){
            foreach($lista[0] as $clave1 => $valor1){
                echo "<th>".$clave1."</th>";
            }
        //}
        echo "<th>Editar</th>";
        echo "<th>Editar Imagen</th>";
        echo "<th>Eliminar</th>";
        echo "<tr>";
        foreach($lista as $clave => $valor){
            echo "<tr>";
            foreach($valor as $clave1 => $valor1){
                if($clave1 == 'imagen'){
                    echo "<td><img src='".$valor1."' ></td>";
                }elseif($clave1 == 'destacado'){
                    if($valor1 == 0){
                        echo "<td><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&destacado=1'>$valor1</a></td>";
                    }else{
                        echo "<td><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&destacado=0'>$valor1</a></td>";
                    }
                }
                else{
                    echo "<td>$valor1</td>";
                }

            }
            echo "<td><a href='index.php?controller=Producto&action=editar&isbn=".$valor->ISBN."'>Editar</a></td>";
            echo "<td><a href='index.php?controller=Producto&action=editarImagen&isbn=".$valor->ISBN."'>Editar</a></td>";
            echo "<td><a href='index.php?controller=Producto&action=eliminar&isbn=".$valor->ISBN."'>Eliminar</a></td>";
            /*echo "<td>";
            /*echo "<form action='index.php?controller=Producto&action=eliminar' method='post'>";
            //echo "<input type='hidden' name='isbn' value='".$valor['ISBN']."'>";
            echo "<input type='submit' value='Eliminar'>";
            echo "</form>";
            echo "</td>";*/
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No hay productos";
    }
    
?>