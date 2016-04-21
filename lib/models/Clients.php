<?php


class Clients {

    private $Identifiant;
    private $Nom;
    private $Siret;

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

    public function getSiret() {
        return $this->Siret;
    }

    public function setSiret($siret) {
        $this->siret = $siret;

        return $this;
    }

}
