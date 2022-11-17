<body>

<?php
        /*if(array_key_exists('button1', $_POST)) {
            button1($_POST['isbn']);
            header('Location:index.php?controller=Base&action=listarCarrito');

        }
        else if(array_key_exists('button2', $_POST)) {
            button2($_POST['isbn']);
            header('Location:index.php?controller=Base&action=listarCarrito');
        }else if(array_key_exists('button3', $_POST)) {
            button3($_POST['isbn']);
            //header('Location:index.php?controller=Base&action=listarCarrito');
        }

        function button1($isbn) {
            $_SESSION['carrito'][$isbn]['cantidad']++;
        }
        function button2($isbn) {
            if($_SESSION['carrito'][$isbn]['cantidad'] > 1){
                $_SESSION['carrito'][$isbn]['cantidad']--;
            }
        }
        function button3($isbn) {
                unset($_SESSION['carrito'][$isbn]);
        }*/
    ?>
<?php  
    if((isset($_SESSION['carrito']) && (count($_SESSION['carrito']) > 0))){
        echo "<div class='containerCarrito'>";
        echo "<div class='containerProductos'>";
            echo "<div class='productoCarrito'>";
                echo "<div class='div1Carrito'>PRODUCTO</div>";
                echo "<div class='div2Carrito'></div>";
                echo "<div class='div3Carrito'>PRECIO</div>";
                echo "<div class='div4Carrito'>CANTIDAD</div>";
                echo "<div class='div5Carrito'>TOTAL</div>";
                echo "<div class='div6Carrito'></div>";
            echo "</div>";
        foreach ($listadoCarrito as $clave => $valor){
            echo "<div class='productoCarrito'>";
                echo "<div class='div1Carrito'><img class='imagenCarrito' src='$valor->imagen' /></div>";
                echo "<div class='div2Carrito'>";
                    echo "<p>$valor->nombre</p>";
                echo "</div>";
                echo "<div class='div3Carrito'>";
                    echo "<p>$valor->precio €</p>";
                echo "</div>";
                echo "<div class='div4Carrito'>";
                    echo "<div class='cantidadCarrito'>";
                        echo "<form method='post' class='formCarrito'>";
                        echo "<input type='submit' name='button2' class='button' value='-' />";
                        echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                        echo "</form>";
                        echo "<p>".$_SESSION['carrito'][$valor->ISBN]['cantidad']."</p>";
                        echo "<form method='post' class='formCarrito'>";
                        echo "<input type='submit' name='button1' class='button' value='+' />";
                        echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                        echo "</form>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='div5Carrito'>".($valor->precio*$_SESSION['carrito'][$valor->ISBN]['cantidad'])." €</div>";
                echo "<div class='div6Carrito'>";
                    echo "<div class='eliminarCarrito'>";
                        echo "<form method='post' class='formCarrito'>";
                        echo "<input type='submit' name='button3' class='button' value='x' />";
                        echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                        echo "</form>"; 
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
            echo "</div>";
            echo "<div sumarioCarrito>";
                echo "<div 'sumarioCarrito1'>Resumen del Pedido</div>";
                echo "<div 'sumarioCarrito2'>";
                    echo "<div 'subtotal'>";
                        echo "<p>Subtotal</p>";
                        echo "<p>80€</p>";
                    echo "</div>";
                    echo "<div class='iva'>";
                        echo "<p>IVA</p>";
                        echo "<p>80€</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div 'sumarioCarrito3'>";
                    echo "<p>Total</p>";
                    echo "<p>80€</p>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }else{
        echo "No tienes productos en el carrito";
    }
    
    ?>
</body>
</html>