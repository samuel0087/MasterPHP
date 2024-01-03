<?php
require_once 'Coche.php';

$coche = new Coche('Rojo morisco', 'Ford', 'Taunus Coupe', 300, 2.3, 1981);

echo $coche->getInformacion();