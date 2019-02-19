<?php

class Temps
{

    public $id_temperature;
    public $debut_temperature;
    public $fin_temperature;


    /**
     * Periods constructor.
     * @param $id_temperature
     */
    function __construct($id_temperature) {

        global $db;

        $id_temperature = str_secur($id_temperature);

        $reqtemperature = $db->prepare('SELECT * FROM temperature WHERE id = ?');
        $reqtemperature->execute([$id_temperature]);
        $data = $reqtemperature->fetch();

        $this->id = $id_temperature;
        $this->debut_temperature = $data['temp_min'];
        $this->fin_temperature = $data['temp_max'];

    }

    /**
     * @return array
     */
    static function getAllTemps() {

        global $db;

        $reqtemperatures = $db->prepare('SELECT * FROM temperature');
        $reqtemperatures->execute([]);
        return $reqtemperatures->fetchAll();

    }

}