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


$OffreDAO = new OffreDAO();
$TypeDeContratDAO = new TypesDeContratDAO();
$MetierDAO = new MetierDAO();
$DomaineDeMetierDAO = new DomaineDeMetierDAO();


$ListResearch = $OffreDAO->FindAllOffre();
$ListeContrat = $TypeDeContratDAO->FindAllContrat();
$ListeMetier = $MetierDAO->FindAllMetier();
$ListeDomaine = $DomaineDeMetierDAO->FindAllDomaine();

require WEB_DIR . 'ViewIndex.php';



