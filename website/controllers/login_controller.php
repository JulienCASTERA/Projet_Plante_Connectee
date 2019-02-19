<?php
session_start();

if(isset($_POST['username']) and isset($_POST['password']))  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errors = array(); 
    //var_dump($username);
    //var_dump($password);
    $query = $db->prepare("SELECT id_user, username, password FROM user WHERE 
    username=? AND password=? ");
    $query->execute([$username,$password]);

    $row = $query->fetch();
    $userid = $row['id_user'];
    if($row) {
        $_SESSION['success'] = 'Vous êtes connecté ! Bienvenue sur votre tableau de bord. Que souhaitez vous faire ?';
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $userid;
        header('location:/dashboard');
    } else {
        array_push($errors, "Mauvais mot de passe ou nom d'utilisateur !");
    }
} else {
    if(isset($_SESSION['username'])) {
        $_SESSION['warning'] = 'Vous êtes déjà connecté !';
        header('location:/home');
    }else {
        header('location:/home');
    }
}