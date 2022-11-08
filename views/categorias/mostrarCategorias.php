<?php
    echo "<table class='tablaAdmin'>";
    echo "<tr>";
    echo "<th class='thAdmin'> ID </td>";
    echo "<th class='thAdmin'> Nombre </td>";
    echo "</tr>";
    foreach ($categorias as $categoria) {
        echo "<tr>";
        echo "<td class='tdAdmin'>". $categoria['idCategoria'] . "</td>";
        echo "<td class='tdAdmin'>".$categoria['nombre'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>                                                                                                                                                          