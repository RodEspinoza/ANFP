<?php

include '/Cl_Conexion.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO_Nacionalidad
 *
 * @author Merumelada
 */
class DaoEstado {

    private $cone;

    public function DaoEstado() {
        try {
            $this->cone = new Cl_Conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function sqlBuscarId($nombre) {
        try {
            $nombre = trim($nombre);
            $sql = "SELECT * FROM estado where Nombre_Nac='@n'";
            $sql = str_replace("@n", $nombre, $sql);
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function sqlBuscarEstado() {
        try {
            $sql = "select * from estado";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

?>
