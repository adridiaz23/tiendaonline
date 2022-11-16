<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        <div class="menu3">favoritos</div>
        <div class="menu4"><a href='index.php?controller=Base&action=listarCarrito'>Carrito</a></div>
        <div class="menu5">Usuario / Inicia Sesion</div>
        <div class="menu12"><hr></div>
        <div class="menu6"><?php echo $categorias[0]->nombre; ?></div>
        <div class="menu7"><?php echo $categorias[1]->nombre; ?></div>
        <div class="menu8"><?php echo $categorias[2]->nombre; ?></div>
        <div class="menu9"><?php echo $categorias[3]->nombre; ?></div>
        <div class="menu10"><?php echo $categorias[4]->nombre; ?></div>
        <div class="menu11">Todos</div>
        
    </div>
</body>
</html>