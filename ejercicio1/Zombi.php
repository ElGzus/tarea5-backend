<?php

require_once "Personaje.php";

class Zombi implements Personaje {
    public function ataque() {
        return "El Zombi ataca con sus manos y dientes";
    }

    public function velocidad() {
        return "El Zombi tiene una velocidad de 2.";
    }
}

?>
