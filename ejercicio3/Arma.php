<?php

require_once "Personaje.php";

interface Arma extends Personaje {
    public function getDescription();
    public function ataque();
    public function velocidad();
}

?>
