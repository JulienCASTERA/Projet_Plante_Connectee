<?php

require('_classes/Floraisons.php');
require('_classes/Plantations.php');
require('_classes/Temps.php');
require('_classes/Categories.php');
require('_classes/Humidite.php');
require('_classes/Plantes.php');

$allFloraisons = Floraisons::getAllFloraisons();
$allPlantations = Plantations::getAllPlantation();
$allTemps = Temps::getAllTemps();
$allCategories = Categories::getAllCategories();
$allHum = Humidite::getAllHums();
$allPlants = Plantes::getAllPlantes();

if (isset($_GET['addplant']) && (isset($_GET['viewPlant']) || isset($_GET['addplantdb']))) { 
    $_SESSION['warning'] = 'Vous essayez de jouer avec notre tableau de bord ou je rêve ?';
    header('location:/home');
    exit();
}elseif (isset($_GET['viewPlant']) && (isset($_GET['addplant']) || isset($_GET['addplantdb']))) {
    $_SESSION['warning'] = 'Vous essayez de jouer avec notre tableau de bord ou je rêve ?';
    header('location:/home');
    exit();
}

if (isset($_GET['viewPlant'])) { 

    $reqs = $db->prepare('SELECT * FROM plantes p
    INNER JOIN plantation pp
    ON p.id_plantation = pp.id_plantation
    INNER JOIN floraison f
    ON p.id_floraison = f.id_floraison
    INNER JOIN categorie c
    ON p.id_categorie = c.id_categorie
    INNER JOIN humidite h
    ON c.id_humidite = h.id_humidite
    INNER JOIN temperature t
    ON p.id_temperature = t.id_temperature
    WHERE id_plante = ?
    ');

    $reqs->execute([$_GET['viewPlant']]);

    $data = $reqs->fetch(PDO::FETCH_ASSOC);

    // debug($data);

}