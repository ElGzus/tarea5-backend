<?php

require_once "Melee.php";
require_once "Rango.php";
require_once "Espada.php";
require_once "Baston.php";
require_once "Arco.php";

$Melee = new Melee();
$Rango = new Rango();

$MeleeConEspada = new Espada($Melee);
$RangoConBaston = new Baston($Rango);
$RangoConArco = new Arco($Rango);

echo $MeleeConEspada->getDescription() . "\n";
echo $MeleeConEspada->ataque() . "\n";
echo $MeleeConEspada->velocidad() . "\n\n";

echo $RangoConBaston->getDescription() . "\n";
echo $RangoConBaston->ataque() . "\n";
echo $RangoConBaston->velocidad() . "\n\n";

echo $RangoConArco->getDescription() . "\n";
echo $RangoConArco->ataque() . "\n";
echo $RangoConArco->velocidad() . "\n\n";



?>
