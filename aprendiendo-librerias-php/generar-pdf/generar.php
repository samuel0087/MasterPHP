<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog de Peliculas</title>     
        <link rel="stylesheet" href="css/estilos.css">

    <body>

        <div id="superior" class="clearfix">
            <div id="fecha-hora">
            </div>

            <div id="login">
                <a href="#">
                    Registrarse
                </a>

                <span> | </span>

                <span>Ingresar</span>

                <form action="login.php" class="clearfix">
                    <input type="email" placeholder=" Email"/>
                    <input type="password" placeholder=" Contraseña"/>

                    <input type="submit" value="Ingresar"/>
                </form>
            </div>
        </div>

        <div class="nav">
            <div id="logo">
                <a href="index.php">
                    
                    <span>Blog de peliculas</span>
                </a>
            </div>
        </div>

        <div class="clearfix">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Sobre Mi</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>

        <div id="container">

            <div class="aside">
                <div class="content-aside">
                    <h2>Categorias</h2>
                        <div id="categorias">
                            <ul>
                                <li><a href="#">Categoria</a></li>
                                <li><a href="#">Categoria</a></li>
                                <li><a href="#">Categoria</a></li>
                                <li><a href="#">Categoria</a></li>
                                <li><a href="#">Categoria</a></li>
                            </ul>
                        </div>
                    </div>
            </div>

            <div id="main">

                <h1>Lo ultimo publicado</h1>

                <div class="article">
                    <h2>Titulo</h2>

                    <span>categoria | fecha</span>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ea distinctio debitis consequuntur quisquam quia dicta,
                         expedita eaque est maxime? Quae blanditiis reiciendis molestias qui dicta iure culpa laborum fugiat!
                    </p>
                    
                    <span>autor</span>
                </div>

                

                <div id="ver-todas">
                    <a href="entries.php">
                        ver todas las entradas
                    </a>
                </div>

            </div>
        </div>

        <div class="footer">
            <p>&copy;Blog creado por Samuel Medina</p>
        </div>

        
    </body>
</html>