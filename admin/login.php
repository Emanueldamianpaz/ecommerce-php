<?php include_once("../database/login.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Administración Ecommerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="../index.php">Ecommerce - DaVinci </a></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <h6>Ingresar al sistema</h6>


                        <form action="" method="POST" name="login">
                            <input class="form-control" type="text" name="user" placeholder="Usuario"
                                   required>
                            <input class="form-control" type="password" name="password" placeholder="Contraseña"
                                   required>
                            <div class="alert-danger"><?php echo $errorMsgLogin; ?></div>
                            <br>
                            <input class="btn btn-primary signup" name="login" type="submit" value="ingresar">
                        </form>

                    </div>
                </div>

                <!-- TODO punto extra para el final
                   <div class="already">
                       <p>¿No tiene cuenta?</p>
                       <a href="signup.php">Registrarse</a>
                   </div>-->
            </div>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>