<?php

/* 
 Mostrar una tabla html con las tablas de multipicar del 1 al 10
 */
echo '<table border = "solid" ><tr>';

for($cabecera = 1; $cabecera <= 10; $cabecera++)
{
    echo '<td>Tabla del ' . $cabecera . '</td>';
}

echo '</tr>';

echo '<tr>';

for($i = 1; $i <= 10; $i++)
{

    $cont = 1;

    echo '<td>';

    for($contenido = 1; $contenido <= 10; $contenido++)
    {
        echo $cont .' X '. $contenido .' = '. ($cont * $contenido);
        echo '<br/>';
    }

    echo '</td>';
}

echo'</tr>';

echo '</table>';

