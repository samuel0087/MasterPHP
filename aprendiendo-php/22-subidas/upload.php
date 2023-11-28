<?php
 $archivo = $_FILES['file'];
 $nombre = $archivo['name'];
 $tipo = $archivo['type'];
 
 if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif'){
     if(!is_dir('img')){
         mkdir('img', 0777);
     }
     
     move_uploaded_file($archivo['tmp_name'], 'img/'.$nombre);
     
     header("Refresh: 5; URL=index.php");
     echo '<h1>Archivo guardado con exito...</h1>';
 }
else{
    header("Refresh: 5; URL=index.php");
    echo '<h1>Envie una imagen por favor</h1>';
}