
<?php
Header_HTML();
?>

        <div class="container home">

            <div class="col-sm-3">
                <select class="form-control" id="Critere">
                    <option>DomaineMetier</option>
                    <option>Metier</option>
                    <option>Contrat</option>
                </select>
            </div>

            <button class="btn btn-default col-sm-2" id="SelectionCritere">Ajouter un critère</button>

            <div class="text-right">
                <label>Nom </label>
                <input class="btn btn-default" id="NomRechercher" type="text"/>
                <a id="RechercherBTN" class="btn btn-default">Rechercher</a>
            </div>

            <br>
            <br>
            <div id="DomaineMetier" class="col-sm-2" style="display: none">
                <select class="Recherche form-control">
                    <?php
                    foreach ($ListeDomaine as $domaine) {
                        echo '<option id="', $domaine->getIdentifiant(), '">', $domaine->getNomDomaine(), '</option>';
                    }
                    ?>

                </select>
                <a id="SupprimerDomaineBtn" class="btn btn-default SupprimerBtn">Supprimer</a>
            </div>

            <div id="Metier" class="col-sm-2" style="display: none">
                <select class="Recherche form-control">
                    <?php
                    foreach ($ListeMetier as $metier) {
                        echo '<option id="', $metier->getIdentifiant(), '">', $metier->getNomMetier(), '</option>';
                    }
                    ?>
                </select>
                <a id="SupprimerMetierBtn" class="btn btn-default SupprimerBtn">Supprimer</a>
            </div>

            <div id="Contrat" class="col-sm-2" style="display: none">
                <select class="Recherche form-control">
                    <?php
                    foreach ($ListeContrat as $contrat) {
                        echo '<option id="', $contrat->getIdentifiant(), '">', $contrat->getNomContrat(), '</option>';
                    }
                    ?>
                </select>
                <a id="SupprimerContratBtn" class="btn btn-default SupprimerBtn">Supprimer</a>
            </div>

            <br>
            <br>
            <br>
            <h1 class='text-center text-muted'>Les offres</h1>
            
            <?php
            foreach ($ListResearch as $offre) {
                echo '<a style="text-decoration: none;" href="Offre.php?id=',$offre->getIdentifiant(),'">';
                echo '<div id="panel_', $offre->getIdentifiant(), '" class="panel panel-default" style="display:block">';
                echo '<div class="panel-heading">', $offre->getIntitule(), '</div>';
                echo '<div class="panel-body">Type de contrat : ', $offre->getTypesDeContrat()->getNomContrat(), '<br/>'
                . 'Métier : ', $offre->getMetier()->getNomMetier(), '<br/>'
                . 'Client : ', $offre->getClients()->getNom(), '<br/></div>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </div>
        <script>

            var Offre = [];

<?php
foreach ($ListResearch as $offre) {
    echo 'var temp = [];'
    . 'temp.push("', $offre->getTypesDeContrat()->getNomContrat(), '");'
    . 'temp.push("', $offre->GetMetier()->getNomMetier(), '");'
    . 'temp.push("', $offre->GetMetier()->getDomaineMetier()->getNomDomaine(), '");'
    . 'temp.push("', $offre->getIntitule(), '");'
    . 'temp.push("', $offre->getLocalisation(), '");'
    . 'temp.push("', $offre->getClients()->getNom(), '");'
    . 'Offre["', $offre->getIdentifiant(), '"] = temp;';
}
?>
        </script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Research.js"></script>
    </body>

</html>

