<?php

require_once "Personaje.php";

class Esqueleto implements Personaje {
    public function ataque() {
        return "El Esqueleto ataca con una espada de madera y casi no tiene fuerza";
    }

    public function velocidad() {
        return "El Esqueleto tiene una velocidad de 1.";
    }
}

?>
