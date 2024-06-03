<?php

require_once "Esqueleto.php";
require_once "Zombi.php";

class Generador {
    public static function crearPersonaje($nivel) {
        if ($nivel === "facil") {
            return new Esqueleto();
        } elseif ($nivel === "dificil") {
            return new Zombi();
        } else {
            throw new Exception("nambe, pon un modo de juego valido, existe solo [facil] y [dificil]");
        }
    }
}

?>
