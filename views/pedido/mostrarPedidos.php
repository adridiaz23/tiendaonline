<div class="fromBusquedaPedido">
        <form action="index.php?controller=Pedido&action=mostrarPedidos" method="POST">
            <div class="lupaPedido">
                <div>
                    <input type="text"   placeholder="Buscar por correo. . ." required id="txtbusca"  name="txtbusca">
                </div>
          
                <select id="estado" name="estado"> 
                    <option value="" selected></option> 
                    <option value="0">En reparto</option>
                    <option value="1">Envio entregado</option>
                </select>
                
                <input type="submit" value="Buscar"  >
            </div>
        </form>
</div>

<div class="tablaListadoPedidos">
    <?php 
        if(isset($todosLosPedidos) && count($todosLosPedidos) > 0){
            echo "<table class='tablaAdmin'>";
            echo "<tr>";
            //foreach($lista as $clave => $valor){
                foreach($todosLosPedidos[0] as $clave1 => $valor1){
                    echo "<th class='thAdmin'>".$clave1."</th>";
                }
            echo "<th class='thAdmin'> Mostrar Pedidos </th>";  
            echo "</tr>";
            foreach($todosLosPedidos as $clave => $valor){
                echo "<tr>";
                foreach($valor as $clave1 => $valor1){
                    if($clave1 == 'estado'){
                        if($valor1 == 0){
                            echo "<td class='tdAdmin'><a href='index.php?controller=Pedido&action=editarEstado&idPedido=".$valor->idPedido."&estado=1'>Falta pagar</a></td>";
                        }else{
                            echo "<td class='tdAdmin'><a href='index.php?controller=Pedido&action=editarEstado&idPedido=".$valor->idPedido."&estado=0'>Pagado</a></td>";
                        }
                    }
                    else{
                        echo "<td class='tdAdmin'>$valor1</td>";
                    }
                }
                echo "<td class='tdAdmin'><a href='index.php?controller=Pedido&action=mostrarDetallePedido&idPedido=".$valor->idPedido."'>Mostar Pedidos</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "No hay pedidos";
        }
    ?>
</div>