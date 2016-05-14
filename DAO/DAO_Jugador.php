<?php

include '../BD/Cl_Conexion.php';
include '/Entidad/Cl_Jugador.php';

class DAO_Jugador {

    private $cone;

    public function DAO_Jugador() {
        try {
            $this->cone = new Cl_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Add_Player($j) {
        try {
            $sql = "Insert into jugador values(null,'@nom','@ap','@fn',@pre,'@num',"
                    . "@idClub,@idNacionalidad,@idEstado,@idPosicion)";
            $sql = str_replace("@nom", $j->getNombre(), $sql);
            $sql = str_replace("@ap", $j->getApellido(), $sql);
            $sql = str_replace("@fn", $j->getFecha_nac(), $sql);
            $sql = str_replace("@pre", $j->getPrecio(), $sql);
            $sql = str_replace("@num", $j->getNumero(), $sql);
            $sql = str_replace("@idClub", $j->getClub_idClub(), $sql);
            $sql = str_replace("@idNacionalidad", $j->getNacionalidad_idNacionalidad(), $sql);
            $sql = str_replace("@idEstado", $j->getEstado_idEstado(), $sql);
            $sql = str_replace("@idPosicion", $j->getPosicion_idPosicion(), $sql);

            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Delete_Player($id) {
        try {
            $sql = "Delete from jugador where idJugador = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Search_Player($id) {
        try {
            $sql = "Select * from jugador where idJugador = $id";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Modify_Player($j, $id) {
        try {
            $sql = "Update jugador set nombre = '@nom' , apellido = '@ap' , fecha_nac = '@fn' ,"
                    . " precio = @pre , numero = '@num' , club_idClub = @idClub,"
                    . " nacionalidad_idNacionalidad = @idNacionalidad , estado_idEstado = @idEstado,@idPosicion"
                    . " where idJugador = @id";
            $sql = str_replace("@nom", $j->getNombre(), $sql);
            $sql = str_replace("@ap", $j->getApellido(), $sql);
            $sql = str_replace("@fn", $j->getFecha_nac(), $sql);
            $sql = str_replace("@pre", $j->getPrecio(), $sql);
            $sql = str_replace("@num", $j->getNumero(), $sql);
            $sql = str_replace("@idClub", $j->getClub_idClub(), $sql);
            $sql = str_replace("@idNacionalidad", $j->getNacionalidad_idNacionalidad(), $sql);
            $sql = str_replace("@idEstado", $j->getEstado_idEstado(), $sql);
            $sql = str_replace("@idPosicion", $j->getPosicion_idPosicion(), $sql);
            $sql = str_replace("@id", $id, $sql);
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Search_All() {
        try {
            $sql = "Select * from jugador";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}
