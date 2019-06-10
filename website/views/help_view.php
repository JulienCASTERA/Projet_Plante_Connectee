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

    <div class="preloader"></div>
    <div class="overlay inner cover"></div>
    <div class="col-6 text-center justify-content-center align-self-center"
        style="margin-left: auto;margin-right: auto;">
        <div class="jumbotron">
            <h1 class="display-4">Informations complémentaires</h1>
            <a class="devAid" aria-controls="h_1" aria-expanded="false" role="button" href="#">Quels sont les noms de
                plante autorisés ?</a>
            <p class="textAid">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis leo sit amet
                efficitur pulvinar. Nunc enim metus, tempor nec ipsum nec, feugiat viverra odio. Aenean cursus dignissim
                bibendum. Donec aliquam augue vitae sapien hendrerit, ut tempor neque aliquet. In pellentesque ut velit
                sed tempus. Phasellus varius ipsum non magna elementum, sed pulvinar elit interdum. Phasellus varius
                ligula vehicula interdum lobortis.</p>
            <br>
            <a class="devAid" aria-controls="h_2" aria-expanded="false" role="button" href="#">Quels sont les noms
                d'utilisateur autorisés ?</a>
            <p class="textAid">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis leo sit amet
                efficitur pulvinar. Nunc enim metus, tempor nec ipsum nec, feugiat viverra odio. Aenean cursus dignissim
                bibendum. Donec aliquam augue vitae sapien hendrerit, ut tempor neque aliquet. In pellentesque ut velit
                sed tempus. Phasellus varius ipsum non magna elementum, sed pulvinar elit interdum. Phasellus varius
                ligula vehicula interdum lobortis.</p>
            <br>
            <a class="devAid" aria-controls="h_3" aria-expanded="false" role="button" href="#">Quels sont les limites de
                plante par utilisateur ?</a>
            <p class="textAid">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis leo sit amet
                efficitur pulvinar. Nunc enim metus, tempor nec ipsum nec, feugiat viverra odio. Aenean cursus dignissim
                bibendum. Donec aliquam augue vitae sapien hendrerit, ut tempor neque aliquet. In pellentesque ut velit
                sed tempus. Phasellus varius ipsum non magna elementum, sed pulvinar elit interdum. Phasellus varius
                ligula vehicula interdum lobortis.</p>
            <br>
            <a class="devAid" aria-controls="h_4" aria-expanded="false" role="button" href="#">Comment ajouter une
                plante sur le site ?</a>
            <p class="textAid">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis leo sit amet
                efficitur pulvinar. Nunc enim metus, tempor nec ipsum nec, feugiat viverra odio. Aenean cursus dignissim
                bibendum. Donec aliquam augue vitae sapien hendrerit, ut tempor neque aliquet. In pellentesque ut velit
                sed tempus. Phasellus varius ipsum non magna elementum, sed pulvinar elit interdum. Phasellus varius
                ligula vehicula interdum lobortis.</p>
            <br>
            <div role="tabpanel" id="h_4"></div>
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
                        Reproduction totale ou partielle, sous quelque forme ou support que ce soit, sans autorisation
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

</body>

</html>