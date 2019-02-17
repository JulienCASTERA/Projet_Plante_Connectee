<? session_start(); ?>
<?php
    // Au cas ou on essaye d'aller sur la page sans être connecté
    include('controllers/verif_controller.php');
?>

<!doctype html>
<html>

<head>

    <?php include_once 'views/includes/head.php';
    ?>
</head>

<body>
    <div class="preloader"></div>
    <div class="d-flex" id="wrapper">
        <?php include_once 'views/includes/header.php'?>

        <div class="container-fluid" style="margin-bottom:10px; position:relative;">
            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']); ?>
            </div>
            <?php }?>
        </div>
        <div class="card">
            <h5 class="card-header">Tableau de bord</h5>
            <div class="card-body">
                <h5 class="card-title">Vos plantes</h5>
                <hr class="my-4">
                <div class="card-deck">
                    <div class="card">
                        <a href="#">
                            <img src="assets/images/plante.JPG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Plante 1</h5>
                        </a>
                        <p class="card-text">Votre plante se porte bien.</p>
                        <a href="dashboard_detail.html" class="btn btn-primary">Plus d'informations</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Dernière mise à jour il y a 3 minutes</small>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img src="assets/images/plante2.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Plante 2</h5>
                    </a>
                    <p class="card-text">Votre plante n'est pas assez chauffée.</p>
                    <a href="dashboard_detail.html" class="btn btn-danger">Plus d'informations</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Dernière mise à jour il y a 3 minutes</small>
                </div>
            </div>
            <div class="card">
                <a href="#">
                    <img src="assets/images/plante3.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Plante 3</h5>
                </a>
                <p class="card-text">Votre plante manque d'eau.</p>
                <a href="dashboard_detail.html" class="btn btn-danger">Plus d'informations</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Dernière mise à jour il y a 3 minutes</small>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    </div>

    <?php include_once 'views/includes/footer.php'?>

</body>

</html>