
<?php 

if(isset($todosLosPedidos) && count($todosLosPedidos) > 0){
    echo "<table border=1>";
    echo "<tr>";
    //foreach($lista as $clave => $valor){
    foreach($todosLosPedidos[0] as $clave1 => $valor1){
        echo "<th>".$clave1."</th>";
    }   
    echo "</tr>";
    foreach($todosLosPedidos as $clave => $valor){
        echo "<tr>";
        foreach($valor as $clave1 => $valor1){  
            echo "<td>$valor1</td>";  
        }
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "No hay detalles de Pedido";
}

?>