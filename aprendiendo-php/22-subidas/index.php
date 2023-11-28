<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
    <style>
        img{
            width:500px!important;
        }
    </style>
</head>
<body>
    <h1>Subida de archivos con PHP</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Enviar">
    </form>
    
    <?php
        $gestor = opendir('./img');
        
        if($gestor):
            while(($imagen = readdir($gestor)) !== false):
                if($imagen != '.' && $imagen != '..'):
                    echo "<img src ='img/$imagen'/><br/>";
                endif;
            endwhile;
        endif;
        

    ?>
    
</body>
</html>


