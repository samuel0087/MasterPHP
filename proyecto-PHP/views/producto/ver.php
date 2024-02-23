<?php if(isset($product) && is_object($product)): ?>
    <h2 class="title">Detalle del producto</h2>

    <div class="detalle">
        <div class="desc-img">
            <img src="<?=base_url?>uploads/img/<?=$product->imagen?>" alt="<?=$product->imagen?>"/>
        </div>
        
        <div class="desc-producto">
            <h3 class="title title-producto"><?=$product->nombre?></h3>
            <p class="title title-producto">$<?=$product->precio?></p>

            <span>Detalle:</span>
            <p  class="box" ><?=$product->descripcion?></p>

            <span>Stock</span>
            <p class="box ulti" >stock: <?=$product->stock?></p>
            
            <a href="<?=base_url?>Carrito/add&id=<?=$product->id?>" class="primary-button botton-sam">Agregar al carrito</a>
        </div>
    </div>

<?php else: ?>
    <h2 class="title">No existe este roducto</h2>
<?php endif; ?>