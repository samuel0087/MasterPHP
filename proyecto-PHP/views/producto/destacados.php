<h2>Productos destacados</h2>

<div class="grilla">
    
    <?php while($product = $productos->fetch_object()): ?>
        <a href="<?=base_url?>Producto/ver&id=<?=$product->id?>">
            <div class="product-card">
                <img src="<?=base_url?>uploads/img/<?=$product->imagen?>" width="200px" alt="">
                <div class="product-info">
                    <div>
                        <p class="precio">$<?=$product->precio?></p>
                        <p><?=$product->nombre?></p>
                    </div>
                    <figure>
                        <img src="<?=base_url?>img/icons/bt_add_to_cart.svg" alt="">
                    </figure>
                </div>
            </div>
        </a>
    <?php endwhile; ?>
</div>

