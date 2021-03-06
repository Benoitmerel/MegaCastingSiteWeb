<?php

class OffreDAO {

     private $bdd;
    function FindAllOffre() {

        $this->bdd = new Connexion();
        $ListeOffres = [];
        $bdd = $this->bdd->getDb();
        $reponse = $bdd->query('SELECT Offres.Identifiant, Offres.Intitule, Offres.Reference, Offres.DescriptionPoste, Offres.DescriptionProfil, Offres.NombreDePostes, Offres.DateDebutPublication, Offres.DureedeDiffusion, Clients.Nom, Offres.Localisation, Metier.NomMetier, TypesDeContrat.NomContrat, DomaineDeMetier.NomDomaine FROM Offres INNER JOIN Clients ON Offres.IdentifiantClients = Clients.Identifiant INNER JOIN Metier ON Offres.IdentifiantMetier = Metier.Identifiant INNER JOIN TypesDeContrat ON Offres.IdentifiantTypesContrat = TypesDeContrat.Identifiant INNER JOIN DomaineDeMetier on DomaineDeMetier.Identifiant = Metier.IdentifiantDomaine');

        while ($donnees = $reponse->fetch()) {
            $Offre = new Offres();
            $typesDeContrat = new TypesDeContrat();
            $metier = new Metier();
            $client = new Clients();
            $domaineDeMetier = new DomaineDeMetier();
            $Offre->setIdentifiant($donnees["Identifiant"]);
            $Offre->setTypesDeContrat($typesDeContrat)->setNomContrat($donnees["NomContrat"]);
            $Offre->setMetier($metier)->setNomMetier($donnees["NomMetier"]);
            $Offre->getMetier()->setDomaineMetier($domaineDeMetier)->setNomDomaine($donnees['NomDomaine']);
            $Offre->setIntitule($donnees["Intitule"]);
            $Offre->setLocalisation($donnees["Localisation"]);
            $Offre->setReference($donnees["Reference"]);
            $Offre->setNombreDePostes($donnees["NombreDePostes"]);
            $Offre->setDescriptionPoste($donnees["DescriptionPoste"]);
            $Offre->setDureeDeDiffusion($donnees["DureedeDiffusion"]);
            $Offre->setDescriptionProfil($donnees["DescriptionProfil"]);
            $Offre->setDateDebutPublication($donnees["DateDebutPublication"]);
            $client->setNom($donnees['Nom']);
            $Offre->setClients($client);

            $ListeOffres[$donnees["Identifiant"]] = $Offre;
        }

        return $ListeOffres;
    }
    
     function FindOffreWithId($Id) {

        $this->bbd = new Connexion();
        $ListeOffres = [];
        $bdd = $this->bbd->getDb();
        $reponse = $bdd->prepare('SELECT Offres.Identifiant, Offres.Intitule, Offres.Reference, Offres.DescriptionPoste, Offres.DescriptionProfil, Offres.NombreDePostes, Offres.DateDebutPublication, Offres.DureedeDiffusion, Clients.Nom, Offres.Localisation, Metier.NomMetier, TypesDeContrat.NomContrat, DomaineDeMetier.NomDomaine FROM Offres INNER JOIN Clients ON Offres.IdentifiantClients = Clients.Identifiant INNER JOIN Metier ON Offres.IdentifiantMetier = Metier.Identifiant INNER JOIN TypesDeContrat ON Offres.IdentifiantTypesContrat = TypesDeContrat.Identifiant INNER JOIN DomaineDeMetier on DomaineDeMetier.Identifiant = Metier.IdentifiantDomaine WHERE Offres.Identifiant = :id');
        $reponse->execute(array('id' => $Id));
        
        while ($donnees = $reponse->fetch()) {
            $Offre = new Offres();
            $typesDeContrat = new TypesDeContrat();
            $metier = new Metier();
            $client = new Clients();
            $domaineDeMetier = new DomaineDeMetier();
            $Offre->setIdentifiant($donnees["Identifiant"]);
            $Offre->setTypesDeContrat($typesDeContrat)->setNomContrat($donnees["NomContrat"]);
            $Offre->setMetier($metier)->setNomMetier($donnees["NomMetier"]);
            $Offre->getMetier()->setDomaineMetier($domaineDeMetier)->setNomDomaine($donnees['NomDomaine']);
            $Offre->setIntitule($donnees["Intitule"]);
            $Offre->setLocalisation($donnees["Localisation"]);
            $Offre->setReference($donnees["Reference"]);
            $Offre->setDescriptionPoste($donnees["DescriptionPoste"]);
            $Offre->setNombreDePostes($donnees["NombreDePostes"]);
            $Offre->setDureeDeDiffusion($donnees["DureedeDiffusion"]);
            $Offre->setDescriptionProfil($donnees["DescriptionProfil"]);
            $Offre->setDateDebutPublication($donnees["DateDebutPublication"]);
            $client->setNom($donnees['Nom']);
            $Offre->setClients($client);

            $ListeOffres[$donnees["Identifiant"]] = $Offre;
        }

        return $ListeOffres;
    }

}
