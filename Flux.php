<?php
session_start();
if(!isset($_SESSION['partenaire']))
{
    header('Location: index.php');
    exit();
}
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



$OffreDAO = new OffreDAO();
$ListResearch = $OffreDAO->FindAllOffre();



require WEB_DIR.'ViewFlux.php';



