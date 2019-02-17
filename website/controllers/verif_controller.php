<?
session_start();
?>

<?php   
// Si la variable de session "LOGIN" n'est pas respectée (Si l'on est pas connecté) alors on inclu le formulaire et on prévient
if(!isset($_SESSION['username'])) { ?>
    <html>
        <head>
            <?php require 'views/includes/head.php'?>
        </head>
        <body class="main">
    <p class="alert alert-warning"><strong>Attention!</strong> Vous n'êtes pas autorisé à accéder à cette zone</div>
<?php
include_once 'views/includes/login.php';
include_once 'views/includes/footer.php';
exit(); ?>
        </body>
    </html>
<?php }?>
