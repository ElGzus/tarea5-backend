<?php

require_once "Estrategia.php";

class ArchivoSalida implements Estrategia {
    public function mostrar($mensaje) {
        file_put_contents("mensaje.txt", $mensaje);
        echo "El mensaje c guarda en el archivo 'mensaje.txt' ahi abajo.\n";
    }
}

?>
