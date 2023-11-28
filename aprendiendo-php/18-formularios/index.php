<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Formularios PHP - HTML5</title>
    </head>
    <body>
        <h1>Formularios</h1>
        
        
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>            
            <p>
                <input type="text" name="nombre" placeholder="Nombre"/>
            </p>
            
            <label for="apellido">Apellido:</label>
            <p>
                <input type="text" name="apellido" placeholder="Apellido"/>
            </p>
            
            <label for="boton">Boton:</label>
            <p>
                <input type="button" name="boton" value="Clicame"/>
            </p>
            
             <label for="color">Color:</label>
            <p>
                <input type="color" name="color" value="Eligeme"/>
            </p>
            
            <label for="genero">Genero:</label>
            <p>
                Hombre: <input type="checkbox" name="sexo"/>
                Mujer: <input type="checkbox" name="sexo" checked="checked"/>
            </p>
            
             <label for="fecha">Fecha:</label>
            <p>
                <input type="date" name="fecha"/>
            </p>
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>