<?php

class Cl_Nacionalidad {

    private $idNacionalidad;
    private $nombreNacionalidad;
    
    function __construct() {
        
    }
    
    function setIdNacionalidad($idNacionalidad) {
        $this->idNacionalidad = $idNacionalidad;
    }

    function setNombreNacionalidad($nombreNacionalidad) {
        $this->nombreNacionalidad = $nombreNacionalidad;
    }

    function getIdNacionalidad() {
        return $this->idNacionalidad;
    }

    function getNombreNacionalidad() {
        return $this->nombreNacionalidad;
    }



}
