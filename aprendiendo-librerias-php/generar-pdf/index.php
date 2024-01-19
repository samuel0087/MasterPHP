<?php

require_once '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html = "<h1>Hola mundo!</h1>";
$html .= "<h5>No es una web, es un PDF!</h5>";

$pdf = new Html2Pdf();
$pdf->writeHTML($html);
$pdf->output("Hola mundo.pdf");