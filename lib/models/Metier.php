<?php


class Metier {

    private $Identifiant;
    private $NomMetier;
    private $DomaineMetier;

    public function getIdentifiant() {
        return $this->Identifiant;
    }

    public function setIdentifiant($identifiant) {
        return $this->Identifiant = $identifiant;
    }

    public function getNomMetier() {
        return $this->NomMetier;
    }

    public function setNomMetier($nomMetier) {
        $this->NomMetier = $nomMetier;

        return $this;
    }

    public function getDomaineMetier() {
        return $this->DomaineMetier;
    }

    public function setDomaineMetier($domaineMetier = null) {
        return $this->DomaineMetier = $domaineMetier;
    }

}
