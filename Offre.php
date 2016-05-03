<?php

require_once(dirname(__FILE__) . '/config/global.php');
require_once(REP_DIR . '/FunctionAffichage.php');

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

if (!empty($_GET['id'])) {
    $OffreDAO = new OffreDAO();

    $ListResearch = $OffreDAO->FindOffreWithId($_GET['id']);
    
    require WEB_DIR . 'ViewOffre.php';
}
else{
    require WEB_DIR . 'ViewErreur.php';
}



