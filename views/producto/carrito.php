<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        if(array_key_exists('button1', $_POST)) {
            button1($_POST['isbn']);
            header('Location:index.php?controller=Base&action=listarCarrito');
        }
        else if(array_key_exists('button2', $_POST)) {
            button2($_POST['isbn']);
            header('Location:index.php?controller=Base&action=listarCarrito');
        }

        function button1($isbn) {
            $_SESSION['carrito'][$isbn]['cantidad']++;
        }
        function button2($isbn) {
            if($_SESSION['carrito'][$isbn]['cantidad'] > 1){
                $_SESSION['carrito'][$isbn]['cantidad']--;
            }
        }
    ?>
<?php  
    if(isset($_SESSION['carrito'])){
        echo "<div class='containerCarrito'>";
        echo "ISBN - ";
        echo "Nombre - ";
        echo "Precio - ";
        echo "Cantidad";
        echo "</div>";
        foreach ($listadoCarrito as $clave => $valor){
            /*echo "<div class='productoCarrito'>";
                echo "<div class='producto'>";
                    echo "<img src='$valor->imagen' />";
                echo "</div>";
                echo "<div class='producto'>";
                    echo $valor->ISBN." - ";
                    echo $valor->nombre." - ";
                    echo $valor->precio."€ - ";
                    echo $_SESSION['carrito'][$valor->ISBN]['cantidad'];
                echo "</div>";
            echo "</div>";*/
            echo "<div class='productoCarrito'>";
            echo "<div class='div1Carrito'><img src='$valor->imagen' /></div>";
            echo "<div class='div2Carrito'>";
                echo "<p>$valor->nombre</p>";
                echo "<p>$valor->precio €</p>";
                echo "<div class='cantidadCarrito'>";
                    echo "<form method='post' >";
                    echo "<input type='submit' name='button2' class='button' value='-' />";
                    echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                    echo "</form>";
                    echo "<p>".$_SESSION['carrito'][$valor->ISBN]['cantidad']."</p>";
                    echo "<form method='post' >";
                    echo "<input type='submit' name='button1' class='button' value='+' />";
                    echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                    echo "</form>";
                echo "</div>";
            echo "</div>";
            echo "<div class='div3Carrito'>".($valor->precio*$_SESSION['carrito'][$valor->ISBN]['cantidad'])." €</div>";
            echo "<div class='div4Carrito'></div>";
            echo "</div>";
        }
    }else{
        echo "No tienes productos en el carrito";
    }
    
    ?>
</body>
</html>