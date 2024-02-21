<?php if(isset($product) && is_object($product)): ?>
    <h2 class="title"><?=$product->nombre?></h2>

    <div class="detalle">
        <div class="imagen-producto">
            <img src="<?=base_url?>uploads/img/<?=$product->imagen?>" alt="<?=$product->imagen?>"/>
            <span class="precio-producto">$<?=$product->precio?></span>
            <p class="descripcion-producto"><?=$product->descripcion?></p>
            <p class="stock-producto">stock: <?=$product->stock?></p>
            
            <a href="" class="primary-button botton-sam">Agregar al carrito</a>
        </div>
    </div>

<?php else: ?>
    <h2 class="title">No existe este roducto</h2>
<?php endif; ?>