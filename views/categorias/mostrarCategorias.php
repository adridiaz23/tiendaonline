<?php
    echo "<table border='1'>";
    foreach ($categorias as $categoria) {
        echo "<tr>";
        echo "<td>". $categoria['idCategoria'] . "</td>";
        echo "<td>".$categoria['nombre'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>                                                                                                                                                          