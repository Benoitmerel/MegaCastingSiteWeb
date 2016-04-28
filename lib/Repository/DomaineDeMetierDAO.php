<?php

class DomaineDeMetierDAO {

    private $bdd;

    function FindAllDomaine() {

        $ListeDomaine = [];
         $this->bdd = new Connexion();
         $bdd = $this->bdd->getDb();
        $reponse = $bdd->query('SELECT * FROM DomaineDeMetier');

        while ($donnees = $reponse->fetch()) {

            $domaineDeMetier = new DomaineDeMetier();

            $domaineDeMetier->setIdentifiant($donnees["Identifiant"]);
            $domaineDeMetier->setNomDomaine($donnees["NomDomaine"]);

            $ListeDomaine[$donnees["Identifiant"]] = $domaineDeMetier;
        }

        return $ListeDomaine;
    }

}
