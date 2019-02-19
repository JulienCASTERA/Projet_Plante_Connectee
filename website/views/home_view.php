<?php session_start();?>
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
        <?php if(!isset($_SESSION['username'])) {?>
        <form class="form-inline" method="post" action="/login">
            <div class="col-5 form-group pull-left">
                <input type="text" id="username" name="username" class="form-control" placeholder="Identifiant" autocomplete="username" required autofocus>
            </div>
            <div class="col-4.5 form-group pull-left">
                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" autocomplete="current-password" required>
            </div>
            <div class="col-1 form-group pull-right">
                <button type="submit" class="btn btn-success btn-bg" id="signin-btn">Connexion</button>
            </div>
        </form>
        <?php }
        else {?>
            <a href="/dashboard" class="btn btn-info">Retour au tableau de bord</a>
        <?php } ?>
    </nav>
    
    <div class="col-6 text-center justify-content-center align-self-center" style="margin-left: auto;margin-right: auto;">
        <div class="jumbotron">
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']); ?>
                </div>
            <?php }?>
            <?php if (isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning">
                    <?php 
                        echo $_SESSION['warning']; 
                        unset($_SESSION['warning']); ?>
                </div>
            <?php }?>
            <h1 class="display-4">Donnez de la vie à vos plantes</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at nulla magna. Integer
                sit amet justo maximus, consectetur neque in, maximus massa. Proin suscipit elementum metus, at semper
                ipsum lobortis et. Aliquam erat volutpat. Aliquam elementum non nisi sit amet aliquam. Phasellus eu
                maximus diam, ac congue enim. Morbi lacinia nulla urna, sit amet dapibus velit mattis faucibus.
                Suspendisse mattis iaculis nulla vitae posuere. Sed id lectus laoreet, euismod purus sed, dignissim
                est.</p>
            <hr class="my-4">
            <p>Phasellus eget molestie neque. Donec non urna faucibus, finibus metus vel, mattis magna. Morbi posuere
                quam ut euismod ullamcorper. Fusce vestibulum neque vitae pulvinar congue. Nunc mollis magna quis ex
                ultricies bibendum. Aliquam congue nibh sed laoreet consequat. Nulla ac luctus dolor. Aenean non erat
                sit amet enim malesuada maximus id sed risus. Cras vel libero orci. Vivamus vitae dictum lorem, congue
                consequat justo. Praesent id lacus id ex pretium volutpat quis et orci. Ut sit amet dictum est. Ut
                lorem erat, tempor at metus ac, tempus bibendum urna.</p>
            <a href="/help" class="btn btn-lg btn-success">En
                savoir plus</a>
        </div>
    </div>

    <?php include_once 'views/includes/footer.html'?>

</body>
</html>
