<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimiendo</title>
    </head>
    <body>
        <h1>Imprimiendo por pantalla <?='- Curso de PHP Udemy'?></h1>
        
        <?php
        //Titular de la pagina web        
        echo "<h3>Lista de videojuegos</h3>";
        
        
        /*
         * lista de videjuegos
         * modernos de
         * ps4, pc o xbox
         */
        echo "<ul>"
                . "<li>God Of War</li>"
                . "<li>Call of duty</li>"
                . "<li>Super Mario Bros</li>"
                . "<li>Fifa 23</li>"
            ."</ul>"
        
        ?>
    </body>
</html>

<?php
