<?php

class TypesDeContrat {

    private $Identifiant;
    private $NomContrat;

    public function getIdentifiant() {
        return $this->Identifiant;
    }

    public function setIdentifiant($identifiant) {
        return $this->Identifiant = $identifiant;
    }

    public function getNomContrat() {
        return $this->NomContrat;
    }

    public function setNomContrat($nomContrat) {
        $this->NomContrat = $nomContrat;

        return $this;
    }

}
