<?php

class Floraisons
{

    public $id_floraison;
    public $debut_floraison;
    public $fin_floraison;


    /**
     * Periods constructor.
     * @param $id_floraison
     */
    function __construct($id_floraison) {

        global $db;

        $id_floraison = str_secur($id_floraison);

        $reqFloraison = $db->prepare('SELECT * FROM floraison WHERE id = ?');
        $reqFloraison->execute([$id_floraison]);
        $data = $reqFloraison->fetch();

        $this->id = $id_floraison;
        $this->debut_floraison = $data['debut_floraison'];
        $this->fin_floraison = $data['fin_floraison'];

    }

    /**
     * @return array
     */
    static function getAllFloraisons() {

        global $db;

        $reqFloraisons = $db->prepare('SELECT * FROM floraison');
        $reqFloraisons->execute([]);
        return $reqFloraisons->fetchAll();

    }

}