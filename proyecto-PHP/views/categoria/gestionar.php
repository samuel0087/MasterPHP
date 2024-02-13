<h2>Categorias</h2>

<?php if(isset($_SESSION['create']) && $_SESSION['create']): ?>

  <h2 class="ok">Se guardo Categoria</h2>

<?php elseif(isset($_SESSION['create']) && !$_SESSION['create']): ?>

  <h2 class="error">No se pudo crear Categoria.</h2>

<?php endif;?>

  <?php Utils::deleteSession('create')?>

<table class="tabla">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>
    
    <?php while($cat = $categorias->fetch_object()): ?>
    <tr>
        <td><?=$cat->id;?></td>
        <td><?=$cat->nombre;?></td>
    </tr>    
    <?php endwhile; ?>
</table>

<a href="<?=base_url?>categoria/crear" class="primary-button botton-sam login-button">Crear categria</a>
