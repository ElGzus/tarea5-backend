<?php

require_once "Arma.php";

class Baston implements Arma {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }

    public function getDescription() {
        return $this->personaje->getDescription() . " con Baston";
    }

    public function ataque() {
        return "Ataque con hechizo 130% del daño, pero reduce su salud en 10% salud actual";
    }

    public function velocidad() {
        return "Velocidad de lanzamiento de hechizos 3 segundos hechizo de daño, 5 segundos hechizo de sanación";
    }
}

?>
