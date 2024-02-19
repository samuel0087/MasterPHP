<?php if(isset($cat) && is_object($cat)): ?>
    <h2><?=$cat->nombre?></h2>
    
    <?php if(isset($productos) && $productos->num_rows != 0):?>
        
        <div class="grilla">
    
            <?php while($product = $productos->fetch_object()): ?>
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
            <?php endwhile; ?>
        </div>
        
    <?php else: ?>
        <h2 class="ok">Aun no hay productos con esta categoria</h2>
    <?php endif; ?>

    
<?php else: ?>
    <h2 class="error">No existe esta categoria</h2>

<?php endif; ?>
