<h2>Carrito de compras</h2>

<?php if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])):?>
    <?php $cant =0; ?>
    <table class="tabla">
        <tr>
            <th>IMAGEN</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>UNIDADES</th>
            <th>ELIMINAR</th>
        </tr>
        
        <?php foreach($_SESSION['carrito'] as $indice => $elemento): ?>
            <?php $product = $elemento['producto'];  ?>
            <tr>
                <td><img class="img-carrito" src="<?=base_url?>uploads/img/<?=$product->imagen?>" alt=""></td>
                <td><a href="<?=base_url?>Producto/ver&id=<?=$product->id?>"><?=$product->nombre?></a></td>
                <td>$<?=$product->precio?></td>
                <td>
                    <?=$elemento['cantidad']?>
                    <div class="action">
                        <a href="<?=base_url?>Carrito/up&indice=<?=$indice?>" class="primary-button actionB">+</a>
                        <a href="<?=base_url?>Carrito/down&indice=<?=$indice?>" class="primary-button actionB">-</a>
                    </div>
                </td>  
                <td>
                    <a href="<?=base_url?>Carrito/deleteOne&indice=<?=$indice?>" class="primary-button  delete-button">Quitar</a>
                </td>
            </tr> 
            <?php $cant += $elemento['cantidad']; ?>
        <?php endforeach; ?>
        <?php $stats = Utils::statsCarrito() ?>

        <tr>
            <td class="tablett"></td>
            <td class="tablett"></td>
            <td class="tablett">Total: $<?=$stats['precioTotal']?></td>
            <td class="tablett">Unidades: <?=$cant?></td>
            <td class="tablett"></td>
        </tr>
    </table>
    <a href="<?=base_url?>Carrito/delete" class="botton-sam delete-button">Vaciar carrito</a>
    <a href="<?=base_url?>Pedido/realizar" class="primary-button botton-sam login-button">Realizar pedido</a>
<?php else: ?>
        <h2 class="error">Carrito de compras vacio</h2>
<?php endif; ?>

