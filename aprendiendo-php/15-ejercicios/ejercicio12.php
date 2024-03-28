<?php
$cont = 0;

for($i = 100; $i < 1000; $i++){
    if($i%2 == 0){
        $cont++;
    }
}

?>

<h1>Cantidad de numeros pares de tres cifras: <?=$cont?></h1>