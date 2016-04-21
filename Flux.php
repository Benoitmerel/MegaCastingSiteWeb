<?php
session_start();
if(!isset($_SESSION['partenaire']))
{
    header('Location: index.php');
    exit();
}
require_once(dirname(__FILE__).'/config/global.php');
require_once(REP_DIR.'/OffreRepository.php');
require_once(REP_DIR.'/FunctionAffichage.php');
spl_autoload_register();

$ListResearch = FindAllOffre();



require WEB_DIR.'ViewFlux.php';



