<?php
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td> idPedido </td>";
    echo "<td> dniCliente </td>";
    echo "<td> fechaPeticion </td>";
    echo "<td> estado </td>";
    echo "<td> importeTotal </td>";
   
    echo "</tr>";
    foreach ($todosLosPedidos as $pedido) {
        echo "<tr>";
        echo "<td>". $pedido['idPedido'] . "</td>";
        echo "<td>".$pedido['dniCliente'] . "</td>";
        echo "<td>".$pedido['fechaPeticion'] . "</td>";

        if($pedido == $pedido['estado']){
            if($pedido == 0){
                echo "<td><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&estado=1'>$valor1</a></td>";
            }else{
                echo "<td><a href='index.php?controller=Producto&action=editarDestacado&isbn=".$valor->ISBN."&estado=0'>$valor1</a></td>";
            }
        }else{
        echo "<td>$valor1</td>";
        }


        echo "<td>".$pedido['estado'] . "</td>";
        echo "<td>".$pedido['importeTotal'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
 
?>