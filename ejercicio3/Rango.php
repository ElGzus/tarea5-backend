<?php

require_once "Arma.php";

class Rango implements Arma {
    public function getDescription() {
        return "Mago";
    }

    public function ataque() {
        return "Lanzamiento de hechizos o uso de arco";
    }

    public function velocidad() {
        return "Velocidad de movimiento 1.5 bloques por segundo";
    }
}

?>
