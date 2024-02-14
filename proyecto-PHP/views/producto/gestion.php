<h2>Productos</h2>

<?php if(isset($_SESSION['create']) && $_SESSION['create']): ?>

  <h2 class="ok">Se guardo Producto</h2>

<?php elseif(isset($_SESSION['create']) && !$_SESSION['create']): ?>

  <h2 class="error">No se pudo crear Producto.</h2>

<?php endif;?>

  <?php Utils::deleteSession('create')?>

<table class="tabla">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
    </tr>
    
    <?php while($product = $productos->fetch_object()): ?>
    <tr>
        <td><?=$product->id;?></td>
        <td><?=$product->nombre;?></td>
        <td>$<?=$product->precio;?></td>
        <td><?=$product->stock;?></td>
        
    </tr>    
    <?php endwhile; ?>
</table>

<a href="<?=base_url?>Producto/crear" class="primary-button botton-sam login-button">Crear producto</a>
