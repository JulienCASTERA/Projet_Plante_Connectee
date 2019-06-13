<?php

if (isset($_POST['serialkey']) and isset($_POST['idplante']) and isset($_SESSION['username'])) {
    $serialkey = $_POST['serialkey'];
    $idplante = $_POST['idplante'];
    $user = $_SESSION['id'];

    $req = $db->prepare("INSERT INTO appartenances (serial_key, id_user, id_plante)
                 VALUES (?, ?, ?)");
    $req->execute([$serialkey, $user, $idplante]);
    $_SESSION['success'] = "Vous venez d'ajouter une plante sur votre compte. Vous pouvez désormais accéder à ses informations !";
    header('location:/dashboard');

} elseif (isset($_SESSION['username']) and $_POST['idplante'] == null and $_POST['serialkey'] == null) {
    $_SESSION['warning'] = "Vous devez renseigner tous les champs";
    header('location:/dashboard?addplant');

} else {
    $_SESSION['warning'] = "Vous essayez d'accéder à un endroit interdit petit malin ;)";
    header('location:/home');
}