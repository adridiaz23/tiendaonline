<?php

class Nota extends Database {
    public $nombreNota;
    public $contenidoNota;  
    function getNombreNota() {
        return $this->nombreNota;
    }

    function getContenidoNota() {
        return $this->contenidoNota;
    }

    function setNombreNota($nombreNota) {
        $this->nombreNota = $nombreNota;
    }

    function setContenidoNota($contenidoNota) {
        $this->contenidoNota = $contenidoNota;
    }
    
    function listarTodos(){
        echo "Litando todas las notas";
    }
}

?>