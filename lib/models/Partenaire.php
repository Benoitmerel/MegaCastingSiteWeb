<?php


class Partenaire {

    private $Identifiant;
    private $Nom;
    private $MotDePasse;

    public function getIdentifiant() {
        return $this->Identifiant;
    }

    public function setIdentifiant($identifiant) {
        return $this->Identifiant = $identifiant;
    }

    public function getNom() {
        return $this->Nom;
    }

    public function setNom($nom) {
        $this->Nom = $nom;

        return $this;
    }

    public function getMotDePasse() {
        return $this->MotDePasse;
    }

    public function setMotDePasse($MotDePasse) {
        $this->MotDePasse = $MotDePasse;

        return $this;
    }

}