<?php

class PartenaireDAO {

    private $bdd;

    function FindPartenaire($Nom, $MotDePasse) {

        $this->bdd = new Connexion();
        $bdd = $this->bdd->getDb();
        $Partenaire = new Partenaire();

        $reponse = $bdd->prepare('SELECT * FROM Partenaire WHERE Nom = :Nom AND MotDePasse = :MotDePasse');

        $reponse->execute(array('Nom' => $Nom,
            'MotDePasse' => $MotDePasse));

        $resultat = $reponse->fetch();

        if (!$resultat) {
            return null;
        } else {
            $Partenaire->setIdentifiant($resultat['Identifiant']);
            $Partenaire->setNom($resultat['Nom']);
            $Partenaire->setMotDePasse($resultat['MotDePasse']);
            return $Partenaire;
        }
    }

}
