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