<?php

require_once "Generador.php";

try {
    $nivelDeJuego = "extremo";
    $personaje = Generador::crearPersonaje($nivelDeJuego);
    echo $personaje->ataque() . "\n";
    echo $personaje->velocidad() . "\n";
} catch (Exception $e) {
    echo "Errorazo bro: " . $e->getMessage();
}

?>
