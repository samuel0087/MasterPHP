<?php if(isset($_SESSION['identity'])): ?>
    <h2 class="title">Realizar pedido</h2>

    <a href="<?=base_url?>Carrito/index" class="link">Ver productos del carrito</a>

    <div class="create">
        <h3 class="subtitle">Direccion del pedido</h3>
        <form action="<?=base_url?>Pedido/add" method="POST" class="form form-registro">
            <label for="provincia" class="label">Provincia</label>
            <input type="text" name="provincia" placeholder="Ej: Buenos Aires" class="input input-usu">

            <label for="ciudad" class="label">Ciudad</label>
            <input type="text" name="ciudad" placeholder="Ej: Garin" class="input input-usu">

            <label for="calle" class="label">Calle</label>
            <input type="text" name="calle" placeholder="Ej: Av. Fructuodo Dias 728" class="input input-usu">

            <input type="submit" value="Realizar" class="primary-button login-button botton-sam">

        </form>
    </div>

    




<?php else: ?>
    <h2 class="title error">Necesitas estar identificado</h2>
    <p>Necesitas estar logueado para realizar un pedido</p>
<?php endif; ?>