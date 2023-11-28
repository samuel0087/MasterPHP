<?php
$error = "faltan_datos";

if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) &&
        !empty($_POST['email']) && !empty($_POST['pass'])){
    $error = 'ok';
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    if(!is_string($nombre) || preg_match('/[0-9]/', $nombre)){
        $error = 'nombre';
    }
    
    if(!is_string($apellidos) || preg_match('/[0-9]/', $apellidos)){
        $error = 'apellidos';
    }
    
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    
    if(!is_string($password) || strlen($password) < 5){
        $error = 'password';
    }
    
    
}
else{
    $error = 'faltan_datos';
}

if($error != 'ok'){
    header('Location:index.php?error=' . $error);
}

?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Datos del usuario</title>
        
    <p><?=$nombre?></p>
    <p><?=$apellidos?></p>
    <p><?=$edad?></p>
    <p><?=$email?></p>       
        
    </head>
    <body>

    </body>
</html>




