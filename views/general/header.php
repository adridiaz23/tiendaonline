
<body>
    <div class="menu">
        <div class="menu1"><a href='index.php'>
            <script src='https://cdn.lordicon.com/qjzruarw.js'></script>
            <lord-icon
                src='https://cdn.lordicon.com/wxnxiano.json'
                trigger='morph'
                colors='primary:#ffffff,secondary:#1663c7'
                style='width:250px;height:50px'>
            </lord-icon>
        </a></div>
        <div class="menu2">
            <div class="wrapper"><form class='buscador' action='index.php?controller=Producto&action=buscador' method='Post'>
                <div class="input-data">
                        <input class='buscador' type="text" name='buscador' required>
                        <label class='buscador'>Buscador</label>
                </div></form>
            </div>
        </div>
        <div class="menu4"><a href='index.php?controller=DetallePedido&action=listarCarrito'>
        <?php 
        if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0){
            //echo "<div class='numeroMenuCarrito'>".count($_SESSION['carrito'])."</div>";
            echo '<span class="blue">'.count($_SESSION['carrito']).'</span>';
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
            <div class="menu5"> <a href="index.php?controller=Cliente&action=editarPerfil&correo=<?php echo $_SESSION["correo"]; ?>"><?php echo $_SESSION["Cliente"]; ?> </a> / <a href='index.php?controller=Base&action=salir'>Salir</a> </div>
            <?php
        }else{
            ?>
            <div class="menu5"><a href='index.php?controller=Cliente&action=login'> Inicia Sesion</a> </div>
            <?php
        }
        ?>
        
        <div class="menu6"> <a href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[0]->idCategoria; ?>'><?php echo  $categorias[0]->nombre; ?></a></div>
        <div class="menu7"><a href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[1]->idCategoria; ?>'><?php echo $categorias[1]->nombre; ?></a></div>
        <div class="menu8"><a href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[2]->idCategoria; ?>'><?php echo $categorias[2]->nombre; ?></a></div>
        <div class="menu9"><a href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[3]->idCategoria; ?>'><?php echo $categorias[3]->nombre; ?></a></div>
        <div class="menu10"><a href='index.php?controller=Categoria&action=categoriaCliente&idCategoria=<?php echo  $categorias[4]->idCategoria; ?>'><?php echo $categorias[4]->nombre; ?></a></div>
        <div class="menu11">Todos</div>
        
    </div>
</body>
