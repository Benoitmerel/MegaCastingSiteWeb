<?php

class TypesDeContratDAO {

    private $bbd;

    function FindAllContrat() {

        $ListeContrat = [];
        $this->bbd = new Connexion();
        $bdd = $this->bbd->getDb();
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
