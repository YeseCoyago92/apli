<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Login | Cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter" >
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../web/index.html" class="active">Inicio</a></li>
                </ul>	
                <div class="clearfix"> </div>	
            </div>
            <div class="container-login100" style="background-image:url('../web/images/2.jpg') ">

                <div class="wrap-login100">

                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="../../controller/controllerLogin.php">

                        <span class="login100-form-title">
                            Iniciar Sesión
                        </span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="email" name="correo" placeholder="Correo" required="">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100" type="password" name="contrasenia" placeholder="Contraseña" required="">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="text-right p-t-13 p-b-23"> </div>

                        <div class="container-login100-form-btn">

                            <input type="hidden" value="login" name="opcion">
                            <input type="submit" value="Iniciar Sesión" class="login100-form-btn">
                            <div>
                                <span class="txt1 p-b-9">
                                    <br>
                                    ¿No tienes cuenta?
                                    <a href="../registro/registro.php"> Regístrate!</a>
                                </span>
                                <br>
                            </div>

                        </div>

                        <div class="text-right p-t-13 p-b-23"></div>
                    </form>
                </div>
            </div>
        </div>


        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
</html>