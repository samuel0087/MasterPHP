<h2>Detalle de pedido:</h2>

<?php if(isset($pedido)): ?>
    <div class="datos-pedido">
        <h3>Datos del pedido</h3>
        <p>Numero de orden: <?=$pedido->id?></p>
        <p>Total: $<?=$pedido->costo?> </p>
        <p>Productos: </p>
        <table class="tabla">
            <tr>
                <th>IMAGEN</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>UNIDADES</th>
            </tr>
            
            <?php while($product = $productos->fetch_object()): ?>
                <tr>
                    <td><img class="img-carrito" src="<?=base_url?>uploads/img/<?=$product->imagen?>" alt=""></td>
                    <td><a href="<?=base_url?>Producto/ver&id=<?=$product->id?>"><?=$product->nombre?></a></td>
                    <td>$<?=$product->precio?></td>
                    <td><?=$product->unidades?></td>  
                </tr> 
            <?php endwhile; ?>
            
    </table>
    </div>
<?php endif;?>