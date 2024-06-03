<?php

require_once "ConsolaSalida.php";
require_once "JsonSalida.php";
require_once "ArchivoSalida.php";
require_once "MensajeContexto.php";

$consolaSalida = new ConsolaSalida();
$jsonSalida = new JsonSalida();
$archivoSalida = new ArchivoSalida();

$mensajeContexto = new MensajeContexto($consolaSalida);
$mensajeContexto->mostrarMensaje("Mensajosky en la consolosky");

$mensajeContexto->setEstrategia($jsonSalida);
$mensajeContexto->mostrarMensaje("Este es un mensajillo en formato JSON");

$mensajeContexto->setEstrategia($archivoSalida);
$mensajeContexto->mostrarMensaje(".txt reportandose en la batalla");

?>
