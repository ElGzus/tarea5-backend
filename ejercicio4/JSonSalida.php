<?php

require_once "Estrategia.php";

class JsonSalida implements Estrategia {
    public function mostrar($mensaje) {
        $json = json_encode(["mensaje" => $mensaje]);
        echo "Mensaje c muestra en formato JSON: $json\n";
    }
}

?>
