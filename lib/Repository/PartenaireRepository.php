<?php
require_once(REP_DIR.'/Connexion.php');

function FindPartenaire($Nom,$MotDePasse) {

    $bdd = getDb();
    $reponse = $bdd->prepare('SELECT * FROM Partenaire WHERE Nom = :Nom AND MotDePasse = :MotDePasse');
    
    $reponse->execute(array('Nom'    => $Nom,
                            'MotDePasse' => $MotDePasse));
    
    $resultat = $reponse->fetch();
    
    if (!$resultat)
   {
       return 0;
   }
   else 
   {
       return $resultat;
   }
}
