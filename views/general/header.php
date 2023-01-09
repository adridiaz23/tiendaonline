
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link href="//fonts.googleapis.com/css?family=Lobster:400" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <script src="views\css\assets\script.js"></script>
    <div class="menu">
        <div class="menu1"><a href='index.php'>
            <script src='https://cdn.lordicon.com/qjzruarw.js'></script>
            <lord-icon
                src='https://cdn.lordicon.com/wxnxiano.json'
                trigger='morph'
                colors='primary:#ffffff,secondary:#1663c7'
                style='width:250px;height:50px'>
            </lord-icon></a></div>
        <div class="menu2">
            <div class="wrapper"><form class='buscador'  action='index.php?controller=Producto&action=buscador' method='Post'>
                <div class="input-data">
                        <input class='buscador' autocomplete="off" type="search" pattern="[a-zA-Z0-9]{0,100}" name='buscador' required>
                        <label class='buscador'>Buscador</label>
                </div></form>
            </div>
        </div>
        <div class="menu4"><a href='index.php?controller=DetallePedido&action=listarCarrito'>
        <?php 
        if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0){
            //echo "<div class='numeroMenuCarrito'>".count($_SESSION['carrito'])."</div>";
            
            $count = 0;
            foreach ($_SESSION['carrito'] as $c) {
                $count += $c;
            }
            echo '<span class="blue">'.$count.'</span>';
        }
        ?>
        <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
        <lord-icon
            src="https://cdn.lordicon.com/hyhnpiza.json"
            trigger="loop-on-hover"
            delay="500"
            colors="primary:white"
            state="hover"
            style="width:50px;height:50px">
        </lord-icon>
        </a></div>
        <?php
        if(isset($_SESSION["Cliente"])){
            ?>
            <div class="menu5"> 
                <nav id="menu">
                    <ul>
                     <li class="usuarioLi"><a href="#" class="usuarioLink">
                        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/bhfjfgqz.json"
                            trigger="hover"
                            colors="primary:white"
                            state="hover"
                            style="width:50px;height:50px">
                        </lord-icon>
                     </a>
                        <ul>
                            <li class="usuarioLi1" ><a class="usuarioLink" href="index.php?controller=Cliente&action=editarPerfil&correo=<?php echo $_SESSION["correo"]; ?>">Editar Perfil</a></li>
                            <li class="usuarioLi1" ><a class="usuarioLink" href='index.php?controller=Cliente&action=listarPedido'>Mis pedidos</a></li>
                            <li class="usuarioLi1" ><a class="usuarioLink" href='index.php?controller=Base&action=salir'>Cerrar Sesion</a></li>
                        </ul>
                     </li>
                    </ul>
                </nav>
            </div>
            <?php
        }else{
            ?>
            <div class="menu5"><a href='index.php?controller=Cliente&action=login'> Inicia Sesion</a> </div>
            <?php
        }
        ?>
        
        <div class="menu6"> <a class = "categoriaLink" href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[0]->idCategoria; ?>'><?php echo  $categorias[0]->nombre; ?></a></div>
        <div class="menu7"><a class = "categoriaLink" href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[1]->idCategoria; ?>'><?php echo $categorias[1]->nombre; ?></a></div>
        <div class="menu8"><a class = "categoriaLink" href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[2]->idCategoria; ?>'><?php echo $categorias[2]->nombre; ?></a></div>
        <div class="menu9"><a class = "categoriaLink" href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[3]->idCategoria; ?>'><?php echo $categorias[3]->nombre; ?></a></div>
        <div class="menu10"><a class = "categoriaLink" href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[4]->idCategoria; ?>'><?php echo $categorias[4]->nombre; ?></a></div>
        <div class="menu11">
            
	        <label for="openSideMenu" class="menuIconToggle">
                Categorias
	        </label><input type="checkbox" id="openSideMenu" class="openSideMenu" onclick="openNav()">
	        <div id="mySidenav" class="sidenav">
                <?php
                foreach ($categorias as $clave => $valor){
                    echo "<a class='sidenav_item' href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=".$valor->idCategoria."'>".$valor->nombre."</a>";
	        	    echo "<div class='line'></div>";
                }
                ?>
	        </div>
        </div>

        <!-- Hack Para Desplegar el Menú activando un checkbox -->
        <input type="checkbox" class="checkbox" id="menu-toogle"/>
        <label for="menu-toogle" class="menu-toogle"></label>
        <nav class="nav">
            <?php
                foreach ($categorias as $clave => $valor) {
                    if(isset($_GET['idCategoria']) && $_GET['idCategoria'] == $valor->idCategoria){
                        ?>
                            <a class = "nav__item current" href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $valor->idCategoria; ?>'><?php echo  $valor->nombre; ?></a>
                        <?php
                    }else{
                    ?>
                    <a class = "nav__item" href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $valor->idCategoria; ?>'><?php echo  $valor->nombre; ?></a>
                    <?php
                    }
                }
            ?>
        </nav>
        
    </div>