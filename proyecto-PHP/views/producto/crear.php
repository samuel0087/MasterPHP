<h2 class="title">Crear producto</h2>
<div class="create">
    <div class="form-container">
        
        <form action="<?=base_url?>Producto/save" method="POST" class="form form-registro">
            <label for="name" class="label">Nombre:</label>
            <input type="text" name="name" placeholder="ej: remera vans" class="input input-usu">
            
            <label for="description" class="label">Descricion:</label>
            <textarea name="description" class="input"></textarea>
            
            <label for="precio" class="label">Precio:</label>
            <input type="text" name="precio" class="input input-usu">
            
            <label for="stock" class="label">Stock:</label>
            <input type="number" name="stock" class="input input-usu">
            
            <label for="categoria" class="label">Categoria:</label>
            <?php $categorias = Utils::showCategorias(); ?>
            
            <select name="categoria" class="input">
                <option value="">-</option>
                <?php while($cat = $categorias->fetch_object()): ?>
                
                <option value="<?=$cat->id?>">
                    <?=$cat->nombre?>
                </option>
                    
                <?php endwhile; ?>   
            </select>
            
            <label for="imagen" class="label">Imagen:</label>
            <input type="file" class="botton-sam"/>

          <input type="submit" value="Create" class="primary-button login-button botton-sam">
        </form>
    </div>
</div>    