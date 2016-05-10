<?php

class Cl_Club {

    private $idClub;
    private $nombre;
    private $fechaFundacion;
    private $estadio;
    private $arca;
    private $Anfp_idAnfp;
    private $Usuario_idUsuario;
    private $Nacionalidad_idNacionalidad;

    function __construct() {
        
    }

    function setIdClub($idClub) {
        $this->idClub = $idClub;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechaFundacion($fechaFundacion) {
        $this->fechaFundacion = $fechaFundacion;
    }

    function setEstadio($estadio) {
        $this->estadio = $estadio;
    }

    function setArca($arca) {
        $this->arca = $arca;
    }

    function setAnfp_idAnfp($Anfp_idAnfp) {
        $this->Anfp_idAnfp = $Anfp_idAnfp;
    }
    
    function setUsuario_idUsuario($Usuario_idUsuario) {
        $this->Usuario_idUsuario = $Usuario_idUsuario;
    }

    function setNacionalidad_idNacionalidad($Nacionalidad_idNacionalidad) {
        $this->Nacionalidad_idNacionalidad = $Nacionalidad_idNacionalidad;
    }
    
    function getIdClub() {
        return $this->idClub;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechaFundacion() {
        return $this->fechaFundacion;
    }

    function getEstadio() {
        return $this->estadio;
    }

    function getArca() {
        return $this->arca;
    }

    function getAnfp_idAnfp() {
        return $this->Anfp_idAnfp;
    }
    
    function getUsuario_idUsuario() {
        return $this->Usuario_idUsuario;
    }

    function getNacionalidad_idNacionalidad() {
        return $this->Nacionalidad_idNacionalidad;
    }
}
