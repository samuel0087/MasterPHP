<?php if(isset($edit) && $edit): ?>
    <h2 class="title">Editar <?=$product->nombre?></h2>
    <?php
        $url_action = base_url . 'Producto/save&id=' . $product->id;
    ?>
<?php else:?>
    <h2 class="title">Crear producto</h2>
    <?php
        $url_action = base_url . 'Producto/save';
    ?>
<?php endif;?>


<div class="create">
    <div class="form-container">
        
        <form action="<?=$url_action?>" method="POST" enctype="multipart/form-data" class="form form-registro">
            <label for="name" class="label">Nombre:</label>
            <input type="text" name="name" value="<?=isset($product) && is_object($product) ? "$product->nombre" : ''; ?>" class="input input-usu">
            
            <label for="description" class="label">Descricion:</label>
            <textarea name="description" class="input"><?=isset($product) && is_object($product) ? $product->descripcion : '' ?></textarea>
            
            <label for="precio" class="label">Precio:</label>
            <input type="text" name="precio" value="<?=isset($product) && is_object($product) ? "$product->precio" : ''; ?>" class="input input-usu">
            
            <label for="stock" class="label">Stock:</label>
            <input type="number" name="stock" value="<?=isset($product) && is_object($product) ? "$product->stock" : ''; ?>" class="input input-usu">
            
            <label for="categoria" class="label">Categoria:</label>
            <?php $categorias = Utils::showCategorias(); ?>
            
            <select name="categoria" class="input">
                <option value="">-</option>
                <?php while($cat = $categorias->fetch_object()): ?>
                
                <option value="<?=$cat->id?>" <?=isset($product) && is_object($product) && $cat->id == $product->categoria_id ? 'selected' : ''?>>
                    <?=$cat->nombre?>
                </option>
                    
                <?php endwhile; ?>   
            </select>
            
            <?php if(isset($product) && is_object($product) && !empty($product->imagen)): ?>
            <div class="product-card vista-previa">                
                <img src="<?=base_url?>uploads/img/<?=$product->imagen?>" alt="alt" >
            </div>
            
            <?php endif; ?>
            
            <label for="imagen" class="label">Imagen:</label>
            <input type="file" name="image" class="botton-sam"/>

          <input type="submit" value="Create" class="primary-button login-button botton-sam">
        </form>
    </div>
</div>    