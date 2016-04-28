<?php


class MetierDAO {

    private $bdd;
    function FindAllMetier() {

        $this->bdd = new Connexion();
        $ListeMetier = [];
        $bdd = $this->bdd->getDb();
        
        $reponse = $bdd->query('SELECT * FROM Metier');

        while ($donnees = $reponse->fetch()) {

            $metier = new Metier();

            $metier->setIdentifiant($donnees["Identifiant"]);
            $metier->setNomMetier($donnees["NomMetier"]);

            $ListeMetier[$donnees["Identifiant"]] = $metier;
        }

        return $ListeMetier;
    }

}
