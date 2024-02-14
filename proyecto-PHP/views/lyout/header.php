<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de caisetas</title>
    <link rel="shortcut icon" href="<?=base_url?>img/camista.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url?>css/style.css">
</head>
<body>
    <header>
        <div class="wrap">
            <div id="logo">
                <img src="<?=base_url?>img/camista.png" alt="Logo de camiseta">
                <a href="<?=base_url?>">Tienda de camisetas</a>
            </div>
        </div>
    </header>

    <nav >
        <img src="<?=base_url?>img/icons/icon_menu.svg" alt="menu" class="menu-movile">

        <div class="wrap navbar-left">
            <ul>
                <li><a href="<?=base_url?>">Inicio</a></li>
                
                <?php $categorias = Utils::showCategorias() ?>
                <?php while($cat = $categorias->fetch_object()): ?>
                
                    <li><a href="#"><?=$cat->nombre?></a></li>
                    
                <?php endwhile; ?>
                
                
            </ul>
        </div>
    </nav>

    <div class="wrap principal">