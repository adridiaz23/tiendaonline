
<?php 

if(isset($todosLosPedidos) && count($todosLosPedidos) > 0){
    echo "<table class='tablaAdmin'>";
    echo "<tr>";
    //foreach($lista as $clave => $valor){
    foreach($todosLosPedidos[0] as $clave1 => $valor1){
        echo "<th class='thAdmin'>".$clave1."</th>";
    }   
    echo "</tr>";
    foreach($todosLosPedidos as $clave => $valor){
        echo "<tr>";
        foreach($valor as $clave1 => $valor1){  
            echo "<td class='tdAdmin'>$valor1</td>";  
        }
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "No hay detalles de Pedido";
}

?>