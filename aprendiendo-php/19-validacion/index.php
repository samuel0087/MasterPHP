<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario</h1>
        
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
            }
            else{
                $error = 'ok';
            }
            
            if($error == 'faltan_datos'):
                echo '<strong style="color:red">Por favor llene todos los campos</strong>';
            endif;
        ?>

        <form action="procesar_formulario.php" method="POST">
            
            <?php if($error == 'nombre'): ?>
            <strong style="color:red">Nombre no valido</strong><br/>
            <?php endif; ?>
            
            <label for="nombre">Nombre:</label><br/>      
            <input type="text" name="nombre" placeholder="Nombre"  />
            <br/><br/>
            
            <?php if($error == 'apellidos'): ?>
                <strong style="color:red">Apellidos no valido</strong><br/>
            <?php endif; ?>
                
            <label for="apellidos">Apellidos:</label><br/>      
            <input type="text" name="apellidos" placeholder="Apellidos"  />
            <br/><br/>
            
            
            <?php if($error == 'edad'): ?>
                <strong style="color:red">Edad no valida</strong><br/>
            <?php endif; ?>
                
            <label for="edad">Edad:</label><br/>      
            <input type="number" name="edad" />
            <br/><br/>
            
            <?php if($error == 'email'): ?>
                <strong style="color:red">Email no valido</strong><br/>
            <?php endif; ?>
                
            <label for="email">Email:</label><br/>      
            <input type="email" name="email" placeholder="ejemplo@hotimal.com" />
            <br/><br/>
            
            <?php if($error == 'password'): ?>
                <strong style="color:red">Contraseña no valida</strong><br/>
            <?php endif; ?>
                
            <label for="pass">Contraseña:</label><br/>      
            <input type="password" name="pass" placeholder="**********" />
            <br/><br/>
            
            <input type="submit" value="guardar">
            
        </form>
        
        
    </body>
</html>
