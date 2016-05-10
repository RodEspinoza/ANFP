<?php

class Cl_Jugador {

    private $idJugador;
    private $nombre;
    private $apellido;
    private $fecha_nac;
    private $precio;
    private $numero;
    private $Club_idClub;
    private $Nacionalidad_idNacionalidad;
    private $Estado_idEstado;
    private $Posicion_idPosicion;

    
    function __construct() {
        
    }
    
    function setIdJugador($idJugador) {
        $this->idJugador = $idJugador;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setFecha_nac($fecha_nac) {
        $this->fecha_nac = $fecha_nac;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setClub_idClub($Club_idClub) {
        $this->Club_idClub = $Club_idClub;
    }

    function setNacionalidad_idNacionalidad($Nacionalidad_idNacionalidad) {
        $this->Nacionalidad_idNacionalidad = $Nacionalidad_idNacionalidad;
    }

    function setEstado_idEstado($Estado_idEstado) {
        $this->Estado_idEstado = $Estado_idEstado;
    }

    function setPosicion_idPosicion($Posicion_idPosicion) {
        $this->Posicion_idPosicion = $Posicion_idPosicion;
    }

    function getIdJugador() {
        return $this->idJugador;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getFecha_nac() {
        return $this->fecha_nac;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getNumero() {
        return $this->numero;
    }

    function getClub_idClub() {
        return $this->Club_idClub;
    }

    function getNacionalidad_idNacionalidad() {
        return $this->Nacionalidad_idNacionalidad;
    }

    function getEstado_idEstado() {
        return $this->Estado_idEstado;
    }

    function getPosicion_idPosicion() {
        return $this->Posicion_idPosicion;
    }
}
