<?php
    echo "<table border='1'>";
    foreach ($todosLosUsuarios as $usuario) {
        echo "<tr>";
        echo "<td>". $usuario['nombre'] . "</td>";
        echo "<td>".$usuario['apellidos'] . "</td>";
        echo "<td>".$usuario['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>