<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './DAO/DAO_Nacionalidad.php';
        $dao = new DAO_Nacionalidad();
        $resp = $dao->sqlBuscarNacionalidad();
        ?>
    <center>
        <h1>Prueba Ingreso Club</h1>
        <form method="post" action="guardarClub.php">
            <table>
                <tr>
                    <td>
                        Nombre
                    </td>
                    <td>
                        <input type="text" value="" id="txtNombre" name="txtNombre">
                    </td>

                </tr>
                <tr>
                    <td>
                        Fecha fundación 
                    </td>
                    <td>
                        <input type="date" id="txtFecha" name="txtFundacion">
                    </td>
                </tr>
                <tr>
                    <td>
                        Estadio
                    </td>
                    <td>
                        <input type="text" id="txtEstadio" name="txtEstadio">
                    </td>
                </tr>
                <tr>
                    <td>Arca</td>
                    <td><input type="number" id="txtArca" name="txtArca"></td>
                </tr>
                <tr>
                    <td>Nacionalidad</td>
                    <td>
                        <select name="opcNacionalidad">
                            <?php while ($row = mysqli_fetch_array($resp)) {
                                ?>
                                <option><?php
                                    echo $row[1];                                   
                                    ?></option>
<?php } ?>
                        </select> 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Enviar"/>
                    </td> 
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
