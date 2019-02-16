<!doctype html>
<html>
<head>

    <?php include_once 'views/includes/head.php'?>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="/assets/images/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="" />
            Connected Flowers
        </a>
        <form class="form-inline">
            <div class="col-5 form-group pull-left">
                <input type="email" id="inputEmail" class="form-control" placeholder="Identifiant" autocomplete="username" required autofocus>
            </div>
            <div class="col-4.5 form-group pull-left">
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" autocomplete="current-password" required>
            </div>
            <div class="col-1 form-group pull-right">
                <button type="button" class="btn btn-success btn-bg" id="signin-btn">Connexion</button>
            </div>
        </form>
    </nav>
    <div class="overlay inner cover"></div>
    
    <div class="col-6 text-center justify-content-center align-self-center" style="margin-left: auto;margin-right: auto;">
        <div class="jumbotron">
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
            <button type="button" class="btn btn-lg btn-success" data-toggle="popover" title="A propos" data-content="Vous pouvez accéder à la rubrique <a href='#''>aide</a>">En
                savoir plus</button>
        </div>
    </div>

    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
