<?php

class Cl_Posicion {
    
    private $idPosicion;
    private $nombrePosicion;
    
    function __construct() {
        
    }
    
    function setIdPosicion($idPosicion) {
        $this->idPosicion = $idPosicion;
    }

    function setNombrePosicion($nombrePosicion) {
        $this->nombrePosicion = $nombrePosicion;
    }

    function getIdPosicion() {
        return $this->idPosicion;
    }

    function getNombrePosicion() {
        return $this->nombrePosicion;
    }

}
