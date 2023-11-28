<?php

$numero = 0;

while($numero <= 100)
{
    echo $numero;

    if($numero != 100)
    {
        echo ', ';  
    }
    $numero++;
}

echo '<hr>';

if(isset($_GET['numero']))
{
    //Casteo de dato
    $numero = (int) $_GET['numero'];
}
else
{
    $numero = 1;
}

$con= 0;

while($con <= 10)
{
    echo $numero.' x '.$con.' = '.($con * $numero).'<br/>';
    $con++;
}


//Do while



$edad = 18;
$con = 1;

do{
    echo 'Tienes acceso al local privado '.$con.'<br/>';
    $con++;
}while($edad >= 18 && $con <= 10);



?>