<?php
echo "<div>";
echo "ISBN - ";
echo "Nombre - ";
echo "Precio - ";
echo "Cantidad";
echo "</div>";
    foreach ($listadoCarrito as $clave => $valor){
        echo "<div>";
        echo $valor->ISBN." - ";
        echo $valor->nombre." - ";
        echo $valor->precio."€ - ";
        echo $_SESSION['carrito'][$valor->ISBN]['cantidad'];
        echo "</div>";
    }
?>