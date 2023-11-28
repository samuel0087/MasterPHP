<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function validarEmail($email){
    $result = false;
    
    $result = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $result;
}

if(isset($_GET['email'])){
    if(validarEmail($_GET['email'])){
        echo '<h1>Email correcto</h1>';
    }
    else{
        echo '<h1>Email incorrecto</h1>';
    }
}
?>
 <h1>Formulario</h1>

        <form action="ejercicio2.php" method="GET">
            <label for="email">email:</label><br/>      
            <input type="email" name="email" placeholder="email"/>
            <br/><br/>
            
            
            <input type="submit" value="guardar">