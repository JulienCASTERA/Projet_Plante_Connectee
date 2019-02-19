<?php

if(isset($_POST['plantname']) and isset($_POST['plantdesc']) 
and isset($_POST['plantplant']) and isset($_POST['plantflor']) 
and isset($_POST['planttemp']) and isset($_POST['plantcat']) and isset($_SESSION['username'])) 
{
    $plantname = $_POST['plantname'];
    $plantdesc = $_POST['plantdesc'];
    $plantplant = $_POST['plantplant'];
    $plantflor = $_POST['plantflor'];
    $planttemp = $_POST['planttemp'];
    $plantcat = $_POST['plantcat'];

    $req = $db->prepare("INSERT INTO plantes (nom_plante, description, id_plantation, id_floraison, id_categorie, id_temperature)
                 VALUES (?, ?, ?, ?, ?, ?)");
    $req->execute([$plantname, $plantdesc, $plantplant, $plantflor, $plantcat, $planttemp]);

    $_SESSION['success'] = "Vous venez d'ajouter une plante dans notre base de données ! Merci de votre contribution.";
    header('location:/dashboard');

}elseif(isset($_POST['serialkey']) and isset($_POST['idplante']) and isset($_SESSION['username']) ) {
    $serialkey = $_POST['serialkey'];
    $idplante = $_POST['idplante'];
    $user = $_SESSION['id'];

    $req = $db->prepare("INSERT INTO appartenances (serial_key, id_user, id_plante)
                 VALUES (?, ?, ?)");
    $req->execute([$serialkey, $user, $idplante]);

    $_SESSION['success'] = "Vous venez d'ajouter une plante sur votre compte. Vous pouvez désormais accéder à ses informations !";
    header('location:/dashboard');

}elseif(isset($_SESSION['username']) and $_POST['idplante'] == NULL and $_POST['serialkey'] == NULL) {
    $_SESSION['warning'] = "Vous devez renseigner tous les champs";
    header('location:/dashboard?addplant');

}else {
    $_SESSION['warning'] = "Vous essayez d'accéder à un endroit interdit petit malin ;)";
    header('location:/home');
}