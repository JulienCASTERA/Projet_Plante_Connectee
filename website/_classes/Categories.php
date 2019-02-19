<?php

class Categories
{

    public $id_categorie;
    public $nom_categorie;

    /**
     * Periods constructor.
     * @param $id_categorie
     */
    function __construct($id_categorie) {

        global $db;

        $id_categorie = str_secur($id_categorie);

        $reqcategorie = $db->prepare('SELECT * FROM categorie WHERE id = ?');
        $reqcategorie->execute([$id_categorie]);
        $data = $reqcategorie->fetch();

        $this->id = $id_categorie;
        $this->nom_categorie = $data['nom_categorie'];

    }

    /**
     * @return array
     */
    static function getAllCategories() {

        global $db;

        $reqcategories = $db->prepare('SELECT * FROM categorie');
        $reqcategories->execute([]);
        return $reqcategories->fetchAll();

    }

}