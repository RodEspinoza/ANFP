<?php
class DaoUsuario {

    private $conexion;

    function __construct($conexion) {
        
        $this->conexion = $conexion;
    }

    
    public function Validar($user, $pass) {
        try {
            $sql = "select * from usuario where User='@u' and Pass='@p' ";
            substr_replace($sql, "@u", $user);
            $sql=str_replace("@u", $user, $sql);
            $sql=str_replace("@p", $pass, $sql);
            $resp = $this->conexion->sqlSeleccion($sql);
            return mysqli_num_rows($resp);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
