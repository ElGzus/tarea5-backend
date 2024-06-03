<?php

require_once "Arma.php";

class Espada implements Arma {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }

    public function getDescription() {
        return $this->personaje->getDescription() . " con espada";
    }

    public function ataque() {
        return "Ataque cuerpo a cuerpo con espada combo de 3 golpes, golpe 1: 60% daño, golpe 2: 90% daño, golpe 3: 200% daño";
    }

    public function velocidad() {
        return "Velocidad de ataque con espada golpe 1: 1 segundo, golpe 2: 2 segundos, golpe 3: 3 segundos";
    }
}

?>
