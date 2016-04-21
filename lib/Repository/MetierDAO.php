<?php


class MetierDAO {

    private $bbd;
    function FindAllMetier() {

        $this->bbd = new Connexion();
        $ListeMetier = [];
        $bdd = $this->bbd->getDb();
        
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
