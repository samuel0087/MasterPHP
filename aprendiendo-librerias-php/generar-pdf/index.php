<?php

require_once '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$pdf = new Html2Pdf();

//recoger vista para imprimir
ob_start();
require_once 'generar.php';
$html = ob_get_clean();


$pdf->writeHTML($html);
$pdf->output("Hola_mundo.pdf");