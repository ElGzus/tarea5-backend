<?php

require_once "Arma.php";

class Melee implements Arma {
    public function getDescription() {
        return "Soldado";
    }


    public function ataque() {
        return "Ataque con espada combos de golpes";
    }

    public function velocidad() {
        return "Velocidad de movimiento del soldado 2 bloques por segundo";
    }
}

?>
