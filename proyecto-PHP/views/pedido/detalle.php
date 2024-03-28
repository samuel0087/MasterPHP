<h2>Detalle de pedido:</h2>


<?php if(isset($pedido)): ?>

    <?php if(isset($_SESSION['admin'])):?>
        <div class="create">
            <div class="form-container">
                <form action="<?=base_url?>Pedido/estado" method="POST" class="form form-registro">

                    <input type="hidden" name="pedido_id" value="<?=$pedido->id?>" >
                    
                    <label for="Estado" class="label">Actualizar estado:</label>
                    <select name="estado" class="input">
                        <option value="Confirm" <?=$pedido->estado == 'Confirm' ? 'selected' : ''?>>Pendiente</option>
                        <option value="Preparation" <?=$pedido->estado == 'Preparation' ? 'selected' : ''?>>En preparacion</option>
                        <option value="Ready" <?=$pedido->estado == 'Ready' ? 'selected' : ''?>>Listo para enviar</option>
                        <option value="Sended" <?=$pedido->estado == 'Sended' ? 'selected' : ''?>>Enviado</option>
                    </select>

                <input type="submit" value="Actualizar estado" class="primary-button login-button botton-sam">
                </form>
            </div>
        </div>
    <?php endif;?>

    <div class="datos-pedido">
        <h3>Datos del pedido</h3>
        <p>Estado: <?=Utils::getEstado($pedido->estado)?> </p>
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