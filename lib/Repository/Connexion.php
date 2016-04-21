<?php

class Connexion {

    private $bdd;
    function getDb() {

        try {
            $this->bdd= new PDO("sqlsrv:Server=172.16.1.198;Database=MegaCasting", "sa", "P@ssw0rd");

            return $this->bdd;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

}
