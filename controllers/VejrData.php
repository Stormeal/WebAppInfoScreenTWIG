<?php
$api = "http://api.openweathermap.org/data/2.5/weather?id=2614478&APPID=651c5fed00811436ea7544bf41e0a32c";
$test = file_get_contents($api);
$convertToAssociativeArray = true;
$weather = json_decode($test, $convertToAssociativeArray);

/*
echo "<pre>";
print_r($weather);
echo "</pre>";
*/

$weatherTemperature = $weather["main"]["temp"];
$weatherStatus = $weather["weather"][0]["main"];
$weatherTownName = $weather["name"];
$weatherTemperature -= 273.15;

$weatherTotal[0] = $weatherTemperature;
$weatherTotal[1] = $weatherStatus;
$weatherTotal[2] = $weatherTownName;

require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array('auto_reload' => true));
$template = $twig->loadTemplate('VejrDataTwig.html.twig');
$parametersToTwig = array("weatherTotal" => $weatherTotal);
echo $template->render($parametersToTwig);
?>