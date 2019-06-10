<?php

if(isset($_GET['serial']) && isset($_GET['data_hum']) && isset($_GET['data_lum']) && isset($_GET['data_temp'])) {
    $serial = $_GET['serial'];
    $hum = $_GET['data_hum'];
    $lum = $_GET['data_lum'];
    $temp = $_GET['data_temp'];
    $req = $db->prepare('INSERT INTO data(serial_key,data_hum,data_lum,data_temp)
                        VALUES(?,?,?,?)');

    $req->execute([$serial,$hum,$lum,$temp]);
    echo ('Données bien ajoutées')
    exit();
} else {
    header('location:/');
    exit();
}