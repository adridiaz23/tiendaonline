<?php
    echo "<table border='1'>";
    foreach ($todosLosPedidos as $pedido) {
        echo "<tr>";
        echo "<td>". $pedido['idPedido'] . "</td>";
        echo "<td>".$pedido['fechaPeticion'] . "</td>";
        echo "<td>".$pedido['estado'] . "</td>";
        echo "<td>".$pedido['importeTotal'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
 
?>