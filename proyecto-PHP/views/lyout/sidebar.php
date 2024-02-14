<aside id="lateral">
    
            <?php if(!isset($_SESSION['identity'])): ?>
    
                <h3 id="title-aside">Ingresar</h3>

                <?php if(isset($_SESSION['login']) && !$_SESSION['login']):?>
                    <stron class="error">Error al iniciar sesion</stron>
                <?php endif;?>
                <?php Utils::deleteSession('login') ?>

                <form action="<?=base_url?>Usuario/login" method="POST" class="form">
                    <label for="Email">Email</label>
                    <input type="text" name="email" id="usuario" class="input input-usu" placeholder="Usuario"/>
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="password" class="input input-password" placeholder="***********"/>

                    <input type="submit" value="Ingresar" class="primary-button login-button">
                </form>
            <?php else: ?>
                <h3><?=$_SESSION['identity']->nombre?></h3>
            <?php endif; ?>           
            
            <?php if(isset($_SESSION['admin'])): ?>
                <a href="#">Gestionar pedidos</a>
                <a href="<?=base_url?>Producto/gestion">Gestionar productos</a>
                <a href="<?=base_url?>Categoria/index">Gestionar categorias</a>
            <?php endif; ?>
                
            <?php if(isset($_SESSION['identity'])):?>
                <a href="#">Mis pedidos</a>
                <a href="<?=base_url?>usuario/logout">Cerrar sesion</a>
            <?php else: ?>    
                <a href="<?=base_url?>usuario/registro">Registrarse</a>
            <?php endif;?>

        </aside>

        <main id="contenido">