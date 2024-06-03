<?php

require_once "Windows10.php";
require_once "Windows7Adaptador.php";
require_once "Windows7.php";

function abrirArchivoEnW10(SistemaOperativo $sistemaOperativo, $tipoArchivo) {
    echo $sistemaOperativo->abrirArchivo($tipoArchivo) . "\n";
}

$archivos = ["Word", "Excel", "PowerPoint"];

$windows10 = new Windows10();
foreach ($archivos as $archivo) {
    abrirArchivoEnW10($windows10, $archivo);
}

$windows7 = new Windows7();
$windows7Adaptador = new Windows7Adaptador($windows7);
foreach ($archivos as $archivo) {
    abrirArchivoEnW10($windows7Adaptador, $archivo);
}

?>
