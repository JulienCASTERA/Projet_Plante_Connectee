<?php
require '_classes/Categories.php';
require '_classes/Plantes.php';

$allCategories = Categories::getAllCategories();
$allPlants = Plantes::getAllPlantes();

if (isset($_GET['addplant']) && (isset($_GET['viewPlant']) || isset($_GET['addplantdb']))) {
    $_SESSION['warning'] = 'Vous essayez de jouer avec notre tableau de bord ou je rêve ?';
    header('location:/home');
    exit();
} elseif (isset($_GET['viewPlant']) && (isset($_GET['addplant']) || isset($_GET['addplantdb']))) {
    $_SESSION['warning'] = 'Vous essayez de jouer avec notre tableau de bord ou je rêve ?';
    header('location:/home');
    exit();
}

if (isset($_GET['viewPlant'])) {

    $reqs = $db->prepare('SELECT * FROM appartenances a
    INNER JOIN plantes p
    ON p.id_plante = a.id_plante
    WHERE a.serial_key = ?
    ');

    $reqs->execute([$_GET['viewPlant']]);

    if ($data = $reqs->fetch(PDO::FETCH_ASSOC)) {
        $vals = $db->prepare('SELECT * FROM data
                            WHERE serial_key = ?
                            LIMIT 1');
        $vals->execute([$_GET['viewPlant']]);
        $values = $vals->fetch(PDO::FETCH_ASSOC);
    } else {
        $_SESSION['warning'] = 'Vous essayez de jouer avec notre tableau de bord ou je rêve ?';
        header('location:/');
        exit();
    }

}

if (isset($_POST['plantname']) && isset($_POST['plantdesc'])
    && isset($_SESSION['username'])) {
    $plantname = $_POST['plantname'];
    $plantdesc = $_POST['plantdesc'];
    $debutplant = $_POST['debut_plantation'];
    $finplant = $_POST['fin_plantation'];
    $debutflor = $_POST['debut_floraison'];
    $finflor = $_POST['fin_floraison'];

    $plantcat = $_POST['plantcat'];
    $planttempmin = $_POST['planttempmin'];
    $planttempmax = $_POST['planttempmax'];
    $plantlummin = $_POST['plantlummin'];
    $plantlummax = $_POST['plantlummax'];

    $hummin = $_POST['hum_min'];
    $hummax = $_POST['hum_max'];

    $req = $db->prepare("INSERT INTO plantes (nom_plante, `description`, debut_floraison, fin_floraison,
    debut_plantation, fin_plantation, id_categorie, temp_min, temp_max, lumi_min, lumi_max, hum_min, hum_max)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $req->execute([$plantname, $plantdesc, $debutflor, $finflor, $debutplant, $finplant, $plantcat, $planttempmin, $planttempmax, $plantlummin, $plantlummax, $hummin, $hummax]);
    $_SESSION['success'] = "Vous venez d'ajouter une plante dans notre base de données ! Merci de votre contribution.";
    header('location:/dashboard');

}