<?php

class Offres {

    private $Identifiant;
    private $Intitule;
    private $Reference;
    private $DescriptionPoste;
    private $DescriptionProfil;
    private $Coordonnees;
    private $Localisation;
    private $NombreDePostes;
    private $DureeDeDiffusion;
    private $DateDebutPublication;
    private $Metier;
    private $Clients;
    private $TypesDeContrat;

    public function getIdentifiant() {
        return $this->Identifiant;
    }
    
    public function setIdentifiant($identifiant) {
        return $this->Identifiant = $identifiant;
    }

    public function getIntitule() {
        return $this->Intitule;
    }

    public function setIntitule($intitule) {
        $this->Intitule = $intitule;

        return $this;
    }

    public function getReference() {
        return $this->Reference;
    }

    public function setReference($reference) {
        return $this->Reference = $reference;
    }

    public function getDescriptionPoste() {
        return $this->DescriptionPoste;
    }

    public function setDescriptionPoste($descriptionPoste) {
        return $this->DescriptionPoste = $descriptionPoste;
    }

    public function getDescriptionProfil() {
        return $this->DescriptionProfil;
    }

    public function setDescriptionProfil($descriptionProfil) {
        return $this->DescriptionProfil = $descriptionProfil;
    }

    public function getCoordonnees() {
        return $this->Coordonnees;
    }

    public function setCoordonnees($coordonnees) {
        return $this->Coordonnees = $coordonnees;
    }

    public function getLocalisation() {
        return $this->Localisation;
    }

    public function setLocalisation($localisation) {
        return $this->Localisation = $localisation;
    }

    public function getNombreDePostes() {
        return $this->NombreDePostes;
    }

    public function setNombreDePostes($nombreDePostes) {
        return $this->NombreDePostes = $nombreDePostes;
    }

    public function getDureeDeDiffusion() {
        return $this->DureeDeDiffusion;
    }

    public function setDureeDeDiffusion($dureeDeDiffusion) {
        return $this->DureeDeDiffusion = $dureeDeDiffusion;
    }

    public function getDateDebutPublication() {
        return $this->DateDebutPublication;
    }

    public function setDateDebutPublication($dateDebutPublication) {
        return $this->DateDebutPublication = $dateDebutPublication;
    }

    public function getClients()
    {
        return $this->Clients;
    }

    public function setClients($client = null) {
        $this->Clients = $client;

        return $this;
    }

    public function getMetier() {
        return $this->Metier;
    }

    public function setMetier($metier = null) {
        return $this->Metier = $metier;
    }
    
    public function getTypesDeContrat()
    {
        return $this->TypesDeContrat;
    }
    
    public function setTypesDeContrat($typesDeContrat = null)
    {
        return $this->TypesDeContrat = $typesDeContrat;
    }

}
