<?php

include '../BD/Cl_Conexion.php';

class DAO_Usuario {
    
    private $cone;
    
    public function Search_User($user,$pass){
        try {
        
            $sql="Select * from usuario where user = $user and pass = $pass";
            
        } catch (Exception $ex) {
            
        }
    }
}
