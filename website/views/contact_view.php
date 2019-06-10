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
                <input type="text" id="username" name="username" class="form-control" placeholder="Identifiant"
                    autocomplete="username" required autofocus>
            </div>
            <div class="col-4.5 form-group pull-left">
                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe"
                    autocomplete="current-password" required>
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

    <body>


        <div class="preloader"></div>
        <div class="overlay inner cover"></div>
        <div class="col-6 text-center justify-content-center align-self-center"
            style="margin-left: auto;margin-right: auto;">
            <div class="jumbotron">
                <h1 class="display-4" style="margin-bottom: 50px">Nous contacter :</h1>
                <form action="GET">
                    <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect"
                            aria-label="Example select with button addon">
                            <option selected hidden>Choose...</option>
                            <option value="1">Mail</option>
                            <option value="2">Message</option>
                            <option value="3">Telephone</option>
                        </select>
                        <div class="input-group-append">
                            <button id="choose-contact" class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                    <!--Développant joindre /mail-->
                    <div id="mail" style="display: none;">
                        <hr>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="exemple@adresse.com">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <textarea class="form-control"></textarea>
                            <button class="btn btn-outline-secondary" type="button"
                                style="margin-left: 10px;">Validez</button>
                        </div>
                    </div>
                    <!--Développant joindre /message-->
                    <div id="msg" style="display: none;">
                        <hr>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-comments"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="06.06.06.06.06">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <textarea class="form-control"></textarea>
                            <button class="btn btn-outline-secondary" type="button"
                                style="margin-left: 10px;">Validez</button>
                        </div>
                    </div>
                    <!--Développant joindre /appel-->
                    <div id="appel" style="display: none;">
                        <hr>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="06.06.06.06.06">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <textarea class="form-control"></textarea>
                            <button class="btn btn-outline-secondary" type="button"
                                style="margin-left: 10px;">Validez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="page-footer font-small teal pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <h5 class="text-uppercase font-weight-bold">Mentions légales</h5>
                        <p>En utilisant notre contenu, produits & services, vous acceptez notre Termes de Service et
                            Politique de Confidentialité. L'information dans ce site web est basé sur des différentes
                            librairies de plantes en ligne faits par tiers, ainsi que sur notre propre avis et sources.
                            Reproduction totale ou partielle, sous quelque forme ou support que ce soit, sans
                            autorisation
                            écrite expresse de Connected Flowers est interdite.
                        </p>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-6 mb-md-0 mb-3">
                        <h5 class="text-uppercase font-weight-bold text-right">A propos</h5>
                        <p class="text-right">
                            <a href="#">Guide pratique</a>
                        </p>
                        <p class="text-right">
                            <a href="#">Qui sommes-nous ?</a>
                            <a href="#">Aide (FAQS)</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-left py-3">
                &copy 2019 - Connected Flowers. Tous droits reservés.
            </div>
        </footer>

        <script src="app.js"></script>
    </body>

</html>