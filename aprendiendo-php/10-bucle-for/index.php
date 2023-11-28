<?php

//for

if(isset($_GET['numero']))
{
    $numero = (int) $_GET['numero'];
}
else
{
    echo '<h1>Ingrese un valor para  "numero" por la url<h1>';
}

for($i = 0; $i <= 10; $i++)
{
    if($numero == 45)
    {
        echo 'Estas operaciones no se pueden mostrar';
        break;
    }
    echo $i.' x '.$numero.' = '.($i * $numero).'<br>';

}


?>