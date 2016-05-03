<?php
    Header_HTML();
?>

<br>
<br>
<br>

<?php
    foreach ($ListResearch as $offre) {
?>

<div class="container well col-md-offset-2 col-md-3" style="margin-right:5px;">
            <div class="row">
               
                    <img src="image/logo.png" class="img-responsive" style="width:100%;padding:10px;" alt="Image">
                
            </div>
            <div class="col-md-5">
                <div class="row">
                    Client : <?php echo  $offre->getClients()->getNom(); ?>
                </div>
            </div>
        </div>
        <div class="container col-md-5" style="margin-left:5px;">
            <div class="panel panel-default">
            <div class="panel-heading">Détails de l'offre</div>
            <div class="panel-body">
            <div class='informations'>
                <div class="row">
                    <h2>
                        <?php echo $offre->getIntitule(); ?>
                        <br/>
                    </h2>     
                </div>    
                <div class="row">
                    Date de publication : <?php echo (new DateTime($offre->getDateDebutPublication()))->format("d/m/Y"); ?>
                </div><br/>
                <div class="row">
                    Reference : <?php echo $offre->getReference(); ?>
                </div><br/>
                <div class="row">
                    Lieu : <?php echo $offre->getLocalisation(); ?>
                </div><br/>
                <div class="row">
                    Métier : <?php echo $offre->getMetier()->getNomMetier(); ?>
                </div><br/>
                <div class="row">
                    Nombre de poste(s) : <?php echo $offre->getNombreDePostes(); ?>
                </div><br/>
                <div class="row">
                    Durée de diffusion : <?php echo $offre->getDureeDeDiffusion(); ?> jour(s)
                </div><br/>
                <div class="row">
                    Type de contrat : <?php echo $offre->getTypesDeContrat()->getNomContrat(); ?>
                </div><br/>
            </div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Description du poste</div>
                    <div class="panel-body"><?php echo $offre->getDescriptionPoste(); ?></div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Description du profil</div>
                    <div class="panel-body"><?php echo $offre->getDescriptionProfil(); ?></div>
                </div>
            </div>
        </div>
            
<?php
}
?>