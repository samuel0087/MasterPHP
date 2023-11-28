<?php
if(!is_dir("mi_carpeta")){ // si no existe el directorio
    mkdir('mi_carpeta', 0777) or die ("No se pudo crear la carpeta");
}

// rmdir('mi_carpeta') -> eliminar un directorio

echo '<hr/> <h1> contenido de mi carpeta</h1>';

if($gestor = opendir('./mi_carpeta')){ // abre un directorio y si no se abre devuelve false
    while(false !== ($archivo = readdir($gestor))){ //readdir() devuelve el nombre de la siguiente entrada del directorio
        if($archivo != '.' && $archivo != '..'){
            echo $archivo . '<br/>' ;
        }
        
    }
}

