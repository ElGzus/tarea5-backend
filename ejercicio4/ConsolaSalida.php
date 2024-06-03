<?php

require_once "Estrategia.php";

class ConsolaSalida implements Estrategia {
    public function mostrar($mensaje) {
        echo "Mensaje c muestra en consola: $mensaje\n";
    }
}

?>
