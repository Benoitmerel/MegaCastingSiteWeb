<?php
        Header_HTML_Connecte();
        

?>
<div class="container home">
    <textarea rows="30" cols="150">
        <?php
            echo '<rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0">';
            echo "\n"; 
            echo "&emsp;&emsp;";
            foreach ($ListResearch as $offre) {

                echo '<div class="panel panel-default">';
                echo '<div class="panel-heading">', $offre->getIntitule(), '</div>';
                echo '<div class="panel-body">Type de contrat : ', $offre->getTypesDeContrat()->getNomContrat(), '<br/>'
                . 'Métier : ', $offre->getMetier()->getNomMetier(), '<br/>'
                . 'Clients : ', $offre->getClients()->getNom(), '<br/>'
                . 'Référence : ', $offre->getReference(), '<br/>'
                . 'Description de poste souhaité : ', $offre->getDescriptionPoste(), '<br/>'
                . 'Description du profil souhaité : ', $offre->getDescriptionProfil(), '<br/>'
                . 'Lieu : ', $offre->getLocalisation(), '<br/>'
                . 'Nombre de postes souhaité : ', $offre->getNombreDePostes(), '<br/>'
                . 'Date du début de la publication : ', $offre->getDateDebutPublication(), '<br/>'
                . 'Durée de la diffusion : ', $offre->getDureeDeDiffusion(), '</div>';
                echo '</div>';
            }
        ?>
    </textarea>
</div>