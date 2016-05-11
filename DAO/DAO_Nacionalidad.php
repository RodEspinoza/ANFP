<?php

include '/BD/BD.php';

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
class DAO_Nacionalidad {

    private $cone;

    public function DAO_Nacionalidad() {
        try {
            $this->cone = new BD();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function sqlBuscarId($nombre) {
        try {
            $nombre=trim($nombre);
            $sql = "SELECT * FROM nacionalidad  where Nombre_Nacionalidad='@n'";
            $sql=str_replace("@n",$nombre, $sql);
            $resp=$this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    
    }

    public function sqlBuscarNacionalidad() {
        try {
            $sql = "select * from nacionalidad ";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

?>