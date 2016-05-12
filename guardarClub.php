<?php

include './DAO/DAO_Club.php';
include './Entidad/Cl_Club.php';
// sacar la nacionalidad en otro php para no tener dramas.
$nombreNacionalidad = $_POST["opcNacionalidad"];
$daoClub = new DAO_Club();
$resp = $daoClub->sqlBuscarNacionalidad($nombreNacionalidad);
$idClub;
while ($row = mysqli_fetch_array($resp)) {
    $idClub = $row[0];
}
// Nacionalidad ok
$nombre = $_POST["txtNombre"];
$fecha = $_POST["txtFecha"];
echo $fecha;
$estadio = $_POST["txtEstadio"];
$arca = $_POST["txtArca"];
$anfp = 1;
$idUsuario = 1; // cambiar con sesion
// pasar al club;
$club = new Cl_Club();
$club->setNombre($nombre);
$club->setFechaFundacion($fecha);
$club->setEstadio($estadio);
$club->setArca($arca);
$club->setAnfp_idAnfp($anfp);
$club->setUsuario_idUsuario($idUsuario);
$resp = $daoClub->Add_Club($club);
echo $resp;
?>



