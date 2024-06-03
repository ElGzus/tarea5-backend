<?php

require_once "SistemaOperativo.php";
require_once "Windows7.php";

class Windows7Adaptador implements SistemaOperativo {
    private $windows7;

    public function __construct(Windows7 $windows7) {
        $this->windows7 = $windows7;
    }

    public function abrirArchivo($tipoArchivo) {
        return $this->windows7->abrirArchivoW7($tipoArchivo);
    }
}

?>
