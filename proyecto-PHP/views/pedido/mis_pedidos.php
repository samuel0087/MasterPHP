<?php if(isset($gestion)): ?>
    <h2>Gestion de pedidos:</h2>
<?php else: ?>
    <h2>Mis pedidos:</h2>
<?php endif;?>

<table class="tabla">
    <tr>
        <th>N°Pedido</th>
        <th>COSTO</th>
        <th>FECHA</th>
        <th>ESTADO</th>
    </tr>
    
    <?php while($pedido = $pedidos->fetch_object()): ?>
        <tr>
            <td><a href="<?=base_url?>Pedido/detalle&id=<?=$pedido->id?>"><?=$pedido->id?></a></td>
            <td>$ <?=$pedido->costo?></td>
            <td><?=$pedido->fecha?></td>
            <td><?=Utils::getEstado($pedido->estado)?></td>  
        </tr> 
    <?php endwhile; ?>
        
</table>