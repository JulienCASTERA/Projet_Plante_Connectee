<?php

class Plantes
{

    public $id_plante;
    public $nom_plante;
    public $description;
    public $id_plantation;
    public $id_floraison;
    public $id_categorie;
    public $id_temperature;

    /**
     * Periods constructor.
     * @param $id_plante
     */
    function __construct($id_plante) {

        global $db;

        $id_plante = str_secur($id_plante);

        $reqplante = $db->prepare('SELECT * FROM plantes WHERE id = ?');
        $reqplante->execute([$id_plante]);
        $data = $reqplante->fetch();

        $this->id = $id_plante;
        $this->nom_plante = $data['nom_plante'];
        $this->description = $data['description'];
        $this->id_plantation = $data['id_plantation'];
        $this->id_floraison = $data['id_floraison'];
        $this->id_categorie = $data['id_categorie'];
        $this->id_temperature = $data['id_temperature'];
    }

    /**
     * @return array
     */
    static function getAllPlantes() {

        global $db;

        $reqplantes = $db->prepare('SELECT * FROM plantes');
        $reqplantes->execute([]);
        return $reqplantes->fetchAll();

    }

}
