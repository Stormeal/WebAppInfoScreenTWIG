<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 12-12-2017
 * Time: 10:07
 */

require '../vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$response = $client->request(
    'GET',
    'http://restinfoscreen.azurewebsites.net/Service1.svc/avgTemperatur'
);

var_dump($response);
echo $response ->getBody();

$template = $twig->loadTemplate('../views/Twig/temperature.html.twig');



//$uri = "http://restinfoscreen.azurewebsites.net/Service1.svc/avgTemperatur";
//$jsonData = file_get_contents($uri);
//$convertToAssociativeArray = true;
//$temperatures = json_decode($jsonData, $convertToAssociativeArray);

//require_once '../vendor/autoload.php';
//Twig_Autoloader::register();
//$loader = new Twig_Autoloader()