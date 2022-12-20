<body>

<?php  
require_once "models/detallePedido.php";
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
                echo "<div class='div1Carrito'><a href='index.php?controller=Producto&action=paginaProducto&isbn=".$valor->ISBN."'><img class='imagenCarrito' src='$valor->imagen' /></a></div>";
                echo "<div class='div2Carrito'>";
                    echo "<p><a href='index.php?controller=Producto&action=paginaProducto&isbn=".$valor->ISBN."'>$valor->nombre</a></p>";
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
                            //echo "<p>".$_SESSION['carrito'][$valor->ISBN]."</p>";
                            echo "<form method='post' class='formCarrito'>";
                            echo "<input type='number' name='cantidad' class='cantidad' min='1' max='".$valor->stock."' required title='' style='width=15px' value='".$_SESSION['carrito'][$valor->ISBN]."' />";
                            echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                            echo "</form>";
                            echo "<form method='post' class='formCarrito'>";
                            echo "<input type='submit' name='button1' class='button' value='+' />";
                            echo "<input type='hidden' name='isbn' value='$valor->ISBN' />";
                        echo "</form>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='div5Carrito'>".($valor->precio*intval($_SESSION['carrito'][$valor->ISBN]))." €</div>";
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
            echo "<div class='carritoDerecha'>";
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
                /*echo "<div class='botonPagarCarrito'>";
                    echo "<a href='index.php?controller=Pedido&action=checkout'><p>Pagar</p></a>";
                echo "</div>";*/
                echo "<div class='botonPagarCarrito'>";
                    //echo "<a href='index.php?controller=Pedido&action=checkout'>";
                    ?>
                    <!-- designed by me... enjoy! -->
                    <div class="wrapperCarrito">
                      <a class="cta" href='index.php?controller=Pedido&action=checkout'>
                        <span>Pagar</span>
                        <span>
                          <svg width="54px" height="30px" viewBox="0 0 66 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                              <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                              <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                            </g>
                          </svg>
                        </span> 
                      </a>
                    </div>
                    <?php
                    echo "</a>";
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