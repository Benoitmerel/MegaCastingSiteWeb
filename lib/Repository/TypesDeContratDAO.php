<?php

class TypesDeContratDAO {

    private $bdd;

    function FindAllContrat() {

        $ListeContrat = [];
        $this->bdd = new Connexion();
        $bdd = $this->bdd->getDb();
        $reponse = $bdd->query('SELECT * FROM TypesDeContrat');

        while ($donnees = $reponse->fetch()) {

            $contrat = new TypesDeContrat();

            $contrat->setIdentifiant($donnees["Identifiant"]);
            $contrat->setNomContrat($donnees["NomContrat"]);

            $ListeContrat[$donnees["Identifiant"]] = $contrat;
        }

        return $ListeContrat;
    }

}
