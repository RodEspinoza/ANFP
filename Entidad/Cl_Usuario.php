<?php


class Cl_Usuario {
    
    private $idUsuario;
    private $user;
    private $pass;
    
    function __construct() {
        
    }
    
    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }
}
