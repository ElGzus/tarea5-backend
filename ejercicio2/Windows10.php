<?php

require_once "SistemaOperativo.php";

class Windows10 implements SistemaOperativo {
    public function abrirArchivo($tipoArchivo) {
        return "openiando programa $tipoArchivo en windos ten.";
    }
}

?>
