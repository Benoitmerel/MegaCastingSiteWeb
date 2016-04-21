<?php

class DomaineDeMetierDAO {

    private $bbd;

    function FindAllDomaine() {

        $ListeDomaine = [];
         $this->bbd = new Connexion();
         $bdd = $this->bbd->getDb();
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
