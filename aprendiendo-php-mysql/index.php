<?php
//Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

//Comprobar si la conexion es correcta
if(mysqli_connect_errno()){
    echo "La conexion a la base de datos ha fallado: " . mysqli_connect_error();
}
else{
    echo "La conexion ha sido un exito!!!!!";
}


//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");


while($nota = mysqli_fetch_assoc($query)){
    echo '<hr/>' . $nota['titulo'] . ': ' . $nota['descripcion']. '<br/>';
}

//insertar datos en una base de datos desde PHP
$sql = 'INSERT INTO notas VALUES (null, "crear pagina de licuados", "Rehacer el ejercicio de licuados de programacion 2", "green")';
$insert = mysqli_query($conexion, $sql);

if($sql){
    echo 'Datos guardados exitosamente';
}
else{
    echo 'Error en al guardar datos!!!!! : '. mysqli_error($conexion);
}

