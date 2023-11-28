<?php

/* 
 Cookie: es un fichero que se almacena en el ordenador del usuario que visita la web,
 * con el fin de recordar datos y ratear el comportamiento del mismo en la web
 */

//crear una cookie
//setcookie('nombre', 'valor que puede ser texto', carucidad, ruta, dominio);

//cookie basica
setcookie('Micookie', 'valor de mi galleta');

//cookie con expiracion
setcookie('unyear', 'valor de mi cookie de un año', time() + (60*60*24*365));

?>

<a href="ver_cookies.php">Ver cookies</a>
