<h2>Productos</h2>

<?php if(isset($_SESSION['create']) && $_SESSION['create']): ?>

  <h2 class="ok">Se guardo Producto</h2>

<?php elseif(isset($_SESSION['create']) && !$_SESSION['create']): ?>

  <h2 class="error">No se pudo crear Producto.</h2>

<?php endif;?>
  
  <!-- session de eliminar-->
  
  <?php if(isset($_SESSION['delete']) && $_SESSION['delete']): ?>

  <h2 class="ok">Se elimino Producto</h2>

<?php elseif(isset($_SESSION['delete']) && !$_SESSION['delete']): ?>

  <h2 class="error">No se pudo eliminar Producto.</h2>

<?php endif;?>

  <?php Utils::deleteSession('create')?>
  <?php Utils::deleteSession('delete')?>

<table class="tabla">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
    </tr>
    
    <?php while($product = $productos->fetch_object()): ?>
    <tr>
        <td><?=$product->id;?></td>
        <td><?=$product->nombre;?></td>
        <td>$<?=$product->precio;?></td>
        <td><?=$product->stock;?></td>
        <td>
            <a href="<?=base_url?>Producto/edit&id=<?=$product->id?>" class="primary-button  edit-button">Editar</a>
            <a href="<?=base_url?>Producto/delete&id=<?=$product->id?>" class="primary-button  delete-button">Eliminar</a>
        </td>
        
    </tr>    
    <?php endwhile; ?>
</table>

<a href="<?=base_url?>Producto/crear" class="primary-button botton-sam login-button">Crear producto</a>
