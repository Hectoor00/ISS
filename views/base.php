<?php
    if(isset($_GET['off']))
    {
        session_start();
        $_SESSION = array();
        session_destroy();
    }
    else
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if(isset($_SESSION['login_ok'])):?>
        <title>ISS</title>
    <?php else:?>
        <title>Login</title>
    <?php endif?>
    
    <!--CSS-->
    <link rel="stylesheet" href="./Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/css/boststrap-theme.css">
    <link rel="stylesheet" href="./Public/css/estilo.css">
    <link rel="stylesheet" href="./Public/css/centrado.css">
    <link rel="stylesheet" href="./Public/css/alertify.min.css">
    <link rel="stylesheet" href="./Public/css/default.min.css">
    <!--JS-->
    <script src="./Public/js/jquery-3.5.1.slim.min.js"></script>
    <script src="./Public/js/jquery-1.9.1.min.js"></script>
    <script src="./Public/js/bootstrap.min.js"></script>
    <script src="./Public/js/funciones-navbar.js"></script>
    <script src="./Public/js/alertify.min.js"></script>
    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
    <!-- funciones js para el navbar y el login -->
    <script src="./Public/js/funciones-login.js"></script>
    <script src="./Public/js/funciones-navbar.js"></script>
</head>
<body>
    <div class="container-fluid" id="data">
        <?php if(isset($_SESSION['login_ok'])):?>
            <?php include './views/principal.php';?>
        <?php elseif(isset($_GET['olivde'])):?>
            <?php include './views/olvide_clave.php';?>
        <?php elseif(isset($_GET['cc'])):?>
            <?php include './views/cambio_clave.php';?>
        <?php else:?>
            <?php include'./views/login.php';?>
        <?php endif?>
    </div>
    
</body>
</html>