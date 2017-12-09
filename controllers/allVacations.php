<?php

$uri = "http://restinfoscreen.azurewebsites.net/Service1.svc/vacations";
$jsonData = file_get_contents($uri);
$convertToAssociativeArray = true;
$vacations = json_decode($jsonData, $convertToAssociativeArray);

require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views/Twig');
$twig = new Twig_Environment($loader, array(
    // 'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('vacationPlanning.html.twig');
$parametersToTwig = array("vacations" => $vacations);
echo $template->render($parametersToTwig);