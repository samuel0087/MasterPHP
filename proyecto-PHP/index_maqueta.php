<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de caisetas</title>
    <link rel="shortcut icon" href="img/camista.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="wrap">
            <div id="logo">
                <img src="img/camista.png" alt="Logo de camiseta">
                <a href="index.php">Tienda de camisetas</a>
            </div>
        </div>
    </header>

    <nav >
        <img src="img/icons/icon_menu.svg" alt="menu" class="menu-movile">

        <div class="wrap navbar-left">
            <ul>
                <li><a href="#">COSA 1</a></li>
                <li><a href="#">COSA 2</a></li>
                <li><a href="#">COSA 3</a></li>
                <li><a href="#">COSA 4</a></li>
                <li><a href="#">COSA 5</a></li>
            </ul>
        </div>
    </nav>

    <div class="wrap principal">
        <aside id="lateral">
            <h3 id="title-aside">Ingresar</h3>

            <form action="#" method="POST" class="form">
                <label for="ususario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="input input-usu" placeholder="Usuario"/>
                <label for="pass">Password</label>
                <input type="password" name="password" id="password" class="input input-password" placeholder="***********"/>

                <input type="submit" value="Ingresar" class="primary-button login-button">
            </form>

            <a href="#">Mis pedidos</a>
            <a href="#">Gestionar pedidos</a>
            <a href="#">Gestionar categorias</a>

        </aside>

        <main id="contenido">
            <div class="product-card">
                <img src="img/default.png" width="200px" alt="">
                <div class="product-info">
                    <div>
                        <p class="precio">$120,00</p>
                        <p>Camiseta</p>
                    </div>
                    <figure>
                        <img src="img/icons/bt_add_to_cart.svg" alt="">
                    </figure>
                </div>
            </div>

            <div class="product-card">
                <img src="img/default.png" width="200px" alt="">
                <div class="product-info">
                    <div>
                        <p class="precio">$120,00</p>
                        <p>Camiseta</p>
                    </div>
                    <figure>
                        <img src="img/icons/bt_add_to_cart.svg" alt="">
                    </figure>
                </div>
            </div>

            <div class="product-card">
                <img src="img/default.png" width="200px" alt="">
                <div class="product-info">
                    <div>
                        <p class="precio">$120,00</p>
                        <p>Camiseta</p>
                    </div>
                    <figure>
                        <img src="img/icons/bt_add_to_cart.svg" alt="">
                    </figure>
                </div>
            </div>

            <div class="product-card">
                <img src="img/default.png" width="200px" alt="">
                <div class="product-info">
                    <div>
                        <p class="precio">$120,00</p>
                        <p>Camiseta</p>
                    </div>
                    <figure>
                        <img src="img/icons/bt_add_to_cart.svg" alt="">
                    </figure>
                </div>
            </div>

            <div class="product-card">
                <img src="img/default.png" width="200px" alt="">
                <div class="product-info">
                    <div>
                        <p class="precio">$120,00</p>
                        <p>Camiseta</p>
                    </div>
                    <figure>
                        <img src="img/icons/bt_add_to_cart.svg" alt="">
                    </figure>
                </div>
            </div>

            
        </main>
    </div>

    <footer>
        <div class="wrap">
            <p>Desarrollado por Samuel Tomas Medina&copy; - <?=date('Y')?></p>
        </div>
    </footer>
    
</body>
</html>