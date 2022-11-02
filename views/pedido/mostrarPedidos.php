<?php 
    if(count($todosLosPedidos) > 0){
        echo "<table border=1>";
        echo "<tr>";
        //foreach($lista as $clave => $valor){
            foreach($todosLosPedidos[0] as $clave1 => $valor1){
                echo "<th>".$clave1."</th>";
            }
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
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No hay pedidos";
    }
    
?>