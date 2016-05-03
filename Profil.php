<?php

session_start();
if(!isset($_SESSION['partenaire']))
{
    header('Location: index.php');
    exit();
}

require_once(dirname(__FILE__) . '/config/global.php');
require_once(REP_DIR . '/FunctionAffichage.php');

function my_autoloader($class) {
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

if ($_POST) {

    $Verif = TRUE;

    if (isset($_POST['Envoyer'])) {
        if (trim($_POST['AncienPassword']) == "") {
            $Verif = FALSE;
        } else if (strlen(trim($_POST['AncienPassword'])) < 3 && strlen(trim($_POST['AncienPassword'])) > 50) {
            $Verif = FALSE;
        } else {
            $Ancien_pass_hache = sha1($_POST['AncienPassword']);
        }

        if (trim($_POST['Password']) == "") {
            $Verif = FALSE;
        }
        if (strlen(trim($_POST['Password'])) < 3 && strlen(trim($_POST['Password'])) > 50) {
            $Verif = FALSE;
        } else if ($_POST['Password'] != $_POST['Passwordconfirm']) {
            $Verif = FALSE;
        } else {
            $New_pass_hache = sha1($_POST['Password']);
        }

        if ($Verif == TRUE) {
            $PartenaireDAO = new PartenaireDAO();

            $Valeur = $PartenaireDAO->ModifyPassword($_SESSION['partenaire'], $New_pass_hache, $Ancien_pass_hache);
            if ($Valeur == 0) {
                $error_password = ('Le mot de passe ne correspond pas au mot de passe associé à ce compte');
            } else {
                $password_ok = ('Le mot de passe à bien été changé');
            }
        }
    }
}



    require WEB_DIR . 'ViewProfil.php';
    