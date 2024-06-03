<?php

require_once "Arma.php";

class Arco implements Arma {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }

    public function getDescription() {
        return $this->personaje->getDescription() . " con arco encantado";
    }

    public function ataque() {
        return "Ataque a distancia con flechas de 1 en 1, 100% daño";
    }

    public function velocidad() {
        return "Velocidad de recarga del arco 2 segundos";
    }
}

?>
