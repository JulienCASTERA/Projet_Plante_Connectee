<?php
session_start();
// Au cas ou on essaye de se déconnecter sans être connecté
include('verif_controller.php');
// Destruction des cookies de session

if (isset($_SESSION)) {
    session_destroy();
    // Redirection vers l'index du site
    session_start();
    $_SESSION['success'] = 'Vous êtes maintenant déconnecté.';
    header('location: /home');
    exit();
}
?>