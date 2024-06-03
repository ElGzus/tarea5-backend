<?php

require_once "Estrategia.php";

class MensajeContexto {
    protected $Estrategia;

    public function __construct(Estrategia $Estrategia) {
        $this->Estrategia = $Estrategia;
    }

    public function mostrarMensaje($mensaje) {
        $this->Estrategia->mostrar($mensaje);
    }

    public function setEstrategia(Estrategia $Estrategia) {
        $this->Estrategia = $Estrategia;
    }
}

?>
