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
        echo "<h1 class='tituloCarrito'>Carrito de Compras</h1>";
        echo "<div class='containerCarrito'>";
        echo "<div class='containerProductos'>";
            echo "<div class='productoCarrito'>";
                echo "<div class='div1Carrito'>PRODUCTO</div>";
                echo "<div class='div2Carrito'></div>";
                echo "<div class='div3Carrito'>PRECIO</div>";
                echo "<div class='div4Carrito'>CANTIDAD</div>";
                echo "<div class='div5Carrito'>TOTAL</div>";
                echo "<div class='div6Carrito'>";
                    echo "<form method='post' class='formCarrito'>";
                    echo "<input type='submit' name='button4' class='button' value='Vaciar Carrito' />";
                    echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                    echo "</form>";
                echo "</div>";
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
            echo "<div class='sumarioCarrito'>";
                echo "<div class='sumarioCarrito1'>Resumen del Pedido</div>";
                echo "<div class='sumarioCarrito2'>";
                    echo "<div 'subtotal'>";
                        echo "<p>Subtotal</p>";
                        echo "<p>".$subtotal."€</p>";
                    echo "</div>";
                    echo "<div class='iva'>";
                        echo "<p>IVA</p>";
                        echo "<p>".$iva."€</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='sumarioCarrito3'>";
                    echo "<p>Total</p>";
                    echo "<p>".$total."€</p>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }else{
        echo "<div class='vacioCarrito'>";
            echo "<div class='iconoVacioCarrito'>";
            ?>
            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/bmnlikjh.json"
                trigger="loop"
                delay="2000"
                colors="primary:#006ac1"
                state="hover-1"
                style="width:150px;height:150px">
            </lord-icon>
            <?php
            echo "</div>";
            echo "<h1>Carrito Vacio</h1>";
            echo "<p>Explora multitud de artículos a buen precio desde nuestra página principal</p>";
            echo "<p><a class='buttonCarrito' href='index.php'>Explorar Productos</a></p>";
        echo "</div>";
    }
    ?>
</body>
</html>