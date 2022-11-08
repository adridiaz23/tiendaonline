<div class="fromBusquedaPedido">
    <div class="search-box">
        <form action="index.php?controller=Pedido&action=mostrarPedidos" method="POST">
            <input type="text" id="txtbusca"  name="txtbusca" id="txtbusca" >
            <span></span>
            <select id="estado" name="estado"> 
                <option value="" selected></option> 
                <option value="0">Falta Pagar</option>
                <option value="1">Pagado</option>
            </select>
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="submit" value="Buscar">
        </form>
    </div>
</div>

<div class="tablaListadoPedidos">
    <?php 
        if(isset($todosLosPedidos) && count($todosLosPedidos) > 0){
            echo "<table border=1>";
            echo "<tr>";
            //foreach($lista as $clave => $valor){
                foreach($todosLosPedidos[0] as $clave1 => $valor1){
                    echo "<th>".$clave1."</th>";
                }
            echo "<th> Mostrar Pedidos </th>";  
            echo "</tr>";
            foreach($todosLosPedidos as $clave => $valor){
                echo "<tr>";
                foreach($valor as $clave1 => $valor1){
                    if($clave1 == 'estado'){
                        if($valor1 == 0){
                            echo "<td><a href='index.php?controller=Pedido&action=editarEstado&idPedido=".$valor->idPedido."&estado=1'>Falta pagar</a></td>";
                        }else{
                            echo "<td><a href='index.php?controller=Pedido&action=editarEstado&idPedido=".$valor->idPedido."&estado=0'>Pagado</a></td>";
                        }
                    }
                    else{
                        echo "<td>$valor1</td>";
                    }
                }
                echo "<td><a href='index.php?controller=Pedido&action=mostrarDetallePedido&idPedido=".$valor->idPedido."'>Mostar Pedidos</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "No hay pedidos";
        }
    ?>
</div>