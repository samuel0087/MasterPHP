<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario</h1>

        <form action="guardar.php" method="GET">
            <label for="nombre">Nombre:</label><br/>      
            <input type="text" name="nombre" placeholder="Nombre"/>
            <br/><br/>
            <label for="descripcion">Descripcion</label><br/>
            <textarea name="descripcion"></textarea>
            <br/>
            
            <input type="submit" value="guardar">
            
        </form>
        
        
    </body>
</html>

