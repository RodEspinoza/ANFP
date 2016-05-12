<?php

include '/BD/BD.php';


class DAO_Club {

    private $cone;

    public function DAO_Club() {
        try {
            $this->cone = new BD();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Add_Club($c) {
        try {
            $sql = "Insert into club(nombre,fecha_fundacion,estadio,arca,anfp_idanfp,usuario_idusuario,nacionalidad_idnacionalidad) ".
                    "values('@nom','@ff','@estadio',@arca,@idAnfp,@idUsuario,@idNacionalidad)";
            $sql = str_replace("@nom", $c->getNombre(), $sql);
            $sql = str_replace("@ff", $c->getFechaFundacion(), $sql);
            $sql = str_replace("@estadio", $c->getEstadio(), $sql);
            $sql = str_replace("@arca", $c->getArca(), $sql);
            $sql = str_replace("@idAnfp", $c->getAnfp_idAnfp(), $sql);
            $sql = str_replace("@idUsuario", $c->getUsuario_idUsuario(), $sql);
            $sql = str_replace("@idNacionalidad", $c->getNacionalidad_idNacionalidad(), $sql);
            $resp = $this->cone->sqlSeleccion($sql);
            return $sql;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Delete_Club($id) {
        try {
            $sql = "Delete from club where idClub = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Search_Club($id) {
        try {
            $sql = "Select * from club where idClub = $id";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function Search_All() {
        try {
            $sql = "Select * from club";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
     public function sqlBuscarNacionalidad($nombre) {
        try {
            $nombre = trim($nombre);
            $sql = "SELECT * FROM nacionalidad  where Nombre_Nac='@n'";
            $sql = str_replace("@n", $nombre, $sql);
            $resp = $this->cone->sqlSeleccion($sql);
            
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
