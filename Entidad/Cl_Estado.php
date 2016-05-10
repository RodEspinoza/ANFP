<?php

class Cl_Estado {
    
    private $idEstado;
    private $descripcion;
    
    function __construct() {
        
    }

    function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function getIdEstado() {
        return $this->idEstado;
    }

    function getDescripcion() {
        return $this->descripcion;
    }


}
