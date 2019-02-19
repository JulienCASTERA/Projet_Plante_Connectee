<?php

class Humidite
{

    public $id_humidite;
    public $pourcentage_debut;
    public $pourcentage_fin;


    /**
     * Periods constructor.
     * @param $id_humidite
     */
    function __construct($id_humidite) {

        global $db;

        $id_humidite = str_secur($id_humidite);

        $reqhumidite = $db->prepare('SELECT * FROM humidite WHERE id = ?');
        $reqhumidite->execute([$id_humidite]);
        $data = $reqhumidite->fetch();

        $this->id = $id_humidite;
        $this->pourcentage_debut = $data['pourcentage_debut'];
        $this->pourcentage_fin = $data['pourcentage_fin'];

    }

    /**
     * @return array
     */
    static function getAllHums() {

        global $db;

        $reqhumidites = $db->prepare('SELECT * FROM humidite');
        $reqhumidites->execute([]);
        return $reqhumidites->fetchAll();

    }

}