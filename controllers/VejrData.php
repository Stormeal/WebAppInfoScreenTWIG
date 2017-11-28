<?php
/**
 * Created by PhpStorm.
 * User: Lardman
 * Date: 28-11-2017
 * Time: 11:24
 */

$api = "http://api.openweathermap.org/data/2.5/weather?id=2614478&APPID=651c5fed00811436ea7544bf41e0a32c";

$test = file_get_contents($api);
$convertToAssociativeArray = true;
$weather = json_decode($test, $convertToAssociativeArray);

echo "<pre>";
print_r($weather["main"]["temp"]);
echo "</pre>";
echo "<pre>";
print_r($weather);
echo "</pre>";

$weatherStatus = $weather["weather"];


require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array('auto_reload' => true));
$template = $twig->loadTemplate('VejrDataTwig.html.twig');
$parametersToTwig = array("weatherStatus" => $weatherStatus);
echo $template->render($parametersToTwig);



?>