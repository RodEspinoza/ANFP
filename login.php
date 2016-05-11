
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron" style="background-color: #265a88 ;color: white">
                <h1>ANFP</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-xs-push-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form>
                            <table class="table">
                                <tr>
                                    <td>Usuario:</td>
                                    <td>
                                        <input type="text"
                                               name="txtUsuario"
                                               id="txtUsuario"
                                               required="true">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td>
                                        <input type="password"
                                               name="txtPassword" id="txtPassword"
                                               required="true">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="button" id="btnValidar" value="Validar">
                                        <input type="reset" value="Limpiar">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
