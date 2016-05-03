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

    function ModifyPassword($id,$newpassword,$ancienMotDePasse) {
        
        $this->bdd = new Connexion();
        $bdd = $this->bdd->getDb();
        $reponse = $bdd->prepare('SELECT * FROM partenaire WHERE Identifiant = :id AND MotDePasse = :password');
        $reponse->execute(array('id' => $id,
                                'password' => $ancienMotDePasse));

        $resultat = $reponse->fetch();

        if ($resultat) {
            $reponse = $bdd->prepare('UPDATE partenaire SET MotDePasse = :password WHERE Identifiant = :id');
            $reponse->execute(array('password' => $newpassword,
                                    'id' => $id));
            return 1;
        } else {
            return 0;
        }
    }

}
