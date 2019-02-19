<?php

class Plantations
{

    public $id_plantation;
    public $debut_plantation;
    public $fin_plantation;


    /**
     * Periods constructor.
     * @param $id_plantation
     */
    function __construct($id_plantation) {

        global $db;

        $id_plantation = str_secur($id_plantation);

        $reqPlantation = $db->prepare('SELECT * FROM plantation WHERE id = ?');
        $reqPlantation->execute([$id_plantation]);
        $data = $reqPlantation->fetch();

        $this->id = $id_plantation;
        $this->debut_plantation = $data['debut_plantation'];
        $this->fin_plantation = $data['fin_plantation'];

    }

    /**
     * @return array
     */
    static function getAllPlantation() {

        global $db;

        $reqPlantations = $db->prepare('SELECT * FROM plantation');
        $reqPlantations->execute([]);
        return $reqPlantations->fetchAll();

    }

}