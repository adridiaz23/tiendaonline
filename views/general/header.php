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
        <div class="menu2">Buscador</div>
        <div class="menu4"><a href='index.php?controller=DetallePedido&action=listarCarrito'>
        <?php 
        if(isset($_SESSION['carrito'])){
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
            <div class="menu5"> <?php echo $_SESSION["Cliente"]; ?> / <a href='index.php?controller=Base&action=salir'>Salir</a> </div>
            <?php
        }else{
            ?>
            <div class="menu5"><a href='index.php?controller=Cliente&action=login'> Inicia Sesion</a> </div>
            <?php
        }
        ?>
        <div class="menu6"><?php echo $categorias[0]->nombre; ?></div>
        <div class="menu7"><?php echo $categorias[1]->nombre; ?></div>
        <div class="menu8"><?php echo $categorias[2]->nombre; ?></div>
        <div class="menu9"><?php echo $categorias[3]->nombre; ?></div>
        <div class="menu10"><?php echo $categorias[4]->nombre; ?></div>
        <div class="menu11">Todos</div>
        
    </div>
</body>
