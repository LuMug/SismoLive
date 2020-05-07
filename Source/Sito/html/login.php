<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Titolo -->
        <title>Login Amministratore</title>
        <!-- Meta tag -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="SismoLive Project">
        <meta name="keywords" content="Project, Earthquake, SismoLive, Modulo306">
        <meta name="author" content="Matthias, Marco, Daniel, Georgiy">
        <!-- Icona -->
        <link href="../img/logo.jpg" rel="icon">
        <!-- CSS esterni -->
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="post" action="../php/login.php">
                        <span class="login100-form-title p-b-26">
                        Login Amministratore
                        </span>
                        <br>  <br>
                        <div class="wrap-input100 validate-input" data-validate="Enter an username">
                            <input class="input100" type="text" name="username">
                            <span class="focus-input100" data-placeholder="Username"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <h5 style="color:red;"><b><?php echo $_SESSION["errorLogin"];?></b></h5>
                            <br>
                            <br>
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                Login
                                </button>
                            </div>
                        </div>
                        <div class="text-center p-t-20">
                            <a href="../index.php">Ritorna alla home</a>
                        </div>
                        <div class="text-center p-t-115">
                            <span class="txt1">
                            SismoLive 2020
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <!-- Vendor JS file -->
        <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="../vendor/animsition/js/animsition.min.js"></script>
        <script src="../vendor/bootstrap/js/popper.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendor/select2/select2.min.js"></script>
        <script src="../vendor/daterangepicker/moment.min.js"></script>
        <script src="../vendor/daterangepicker/daterangepicker.js"></script>
        <script src="../vendor/countdowntime/countdowntime.js"></script>
        <!-- Vendor main JS file -->
        <script src="../js/main.js"></script>
    </body>
</html>
