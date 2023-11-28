<!DOCTYPE HTML>
<HTML lang= "es">
    <head>
        <meta charset= "utf-8" />
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario</h1>

        <form action="recibir.php" method="POST">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre">
            </p>
            <p>
                <label for="snombre">Segundo Nombre: </label>
                <input type="text" name="snombre" id="snombre">
            </p>
            <p>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" id="apellido">
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>

        </form>
    </body>
</HTML>