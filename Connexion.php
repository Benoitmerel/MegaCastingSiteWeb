<?php
session_start();
require_once(dirname(__FILE__).'/config/global.php');
require_once(REP_DIR.'/FunctionAffichage.php');

function my_autoloader($class)
{
     $classMap = array(
            'lib\\models\\',
            'lib\\Repository\\',
        );
        foreach ($classMap as $location) {
            if (file_exists(__DIR__ . '\\' . $location . $class . '.php')) {
                require_once(__DIR__ . '\\' . $location . $class . '.php');
            }
        }
}

spl_autoload_register('my_autoloader');

$Verif = True;
$PartenaireDAO = new PartenaireDAO();
$Partenaire = new Partenaire();

if ($_POST) {
    
    if (strlen(trim($_POST['Login'])) < 3  && strlen(trim($_POST['Login'])) > 50)
    {
        $Verif = False;
    }
    else if (strlen(trim($_POST['Password'])) < 3  && strlen(trim($_POST['Password'])) > 50)
    {
        $Verif = False;
    }
    
    if ($Verif == True) {
        $MotDePasseSHA1 = sha1($_POST['Password']);
        $MotDePasseSHA1Maj = mb_strtoupper($MotDePasseSHA1);
        $Partenaire = $PartenaireDAO->FindPartenaire($_POST['Login'],$MotDePasseSHA1Maj);
               
        if ($Partenaire != null) {
            $_SESSION['partenaire'] = (int)$Partenaire->getIdentifiant();
            header('Location: AccueilPartenaire.php');
            exit();
        }else{
            $erreur = 'Le Nom et le Mot de passe ne correspondent pas.';
        }
    }
}


require WEB_DIR.'ViewConnexion.php';



