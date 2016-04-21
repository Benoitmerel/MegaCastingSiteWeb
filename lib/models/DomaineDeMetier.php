<?php


class DomaineDeMetier {

    private $Identifiant;
    private $NomDomaine;

    public function getIdentifiant() {
        return $this->Identifiant;
    }

    public function setIdentifiant($identifiant) {
        return $this->Identifiant = $identifiant;
    }

    public function getNomDomaine() {
        return $this->NomDomaine;
    }

    public function setNomDomaine($nomDomaine) {
        $this->NomDomaine = $nomDomaine;

        return $this;
    }

}
