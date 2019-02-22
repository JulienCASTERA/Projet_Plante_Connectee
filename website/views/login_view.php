<?php  
include('/controllers/login_controller.php');
?>
<!doctype html>
<html>

<head>

    <?php include_once 'views/includes/head.php'?>
</head>

<body class="main">
    <div class="preloader"></div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/assets/images/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="" />
            Connected Flowers
        </a>
    </nav>
    <div class="overlay inner cover"></div>

    <?php include_once 'views/includes/login.php' ?>

    <?php include_once 'views/includes/footer.html'?>

</body>

</html>