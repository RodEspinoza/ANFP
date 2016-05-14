
<?php

include './DAO/DAO_Club.php';
include './Entidad/Cl_Club.php';
// sacar la nacionalidad en otro php para no tener dramas.
$nombreNacionalidad = $_POST["opcNacionalidad"];
$daoClub = new DAO_Club();
$resp = $daoClub->sqlBuscarNacionalidad($nombreNacionalidad);
$idnacionalidad;
while ($row = mysqli_fetch_array($resp)) {
    $idnacionalidad = $row[0];
}
// Nacionalidad ok
$nombre = $_POST["txtNombre"];
$fecha = $_POST["txtFecha"];
$estadio = $_POST["txtEstadio"];
$arca = $_POST["txtArca"];
$anfp = 1;
$idUsuario = 1; // cambiar con sesion
// pasar al club;
$club = new Cl_Club();
$club->setNombre($nombre);
$club->setFechaFundacion($fecha);
$club->setNacionalidad_idNacionalidad($idnacionalidad);
$club->setEstadio($estadio);
$club->setArca($arca);
$club->setAnfp_idAnfp($anfp);
$club->setUsuario_idUsuario($idUsuario);
//validar que exista primero
$respBuscar = $daoClub->buscarClub($nombre);
if ($respBuscar > 0) {
    echo 'Club ya existe';
} else {
    $resp = $daoClub->Add_Club($club);
    $mensaje = "Realizado";
    if ($resp > 0) {
        echo "<center>$mensaje</center>";
    } else {
        $mensaje = "No realizado";
        echo "<center>$mensaje</center>";
        echo "<input type='button' value='Regresar' src='ingresararClub.php'>";
    }
}
?>
